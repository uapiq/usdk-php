<?php

declare(strict_types=1);

namespace Usdk;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Usdk\Core\BaseClient;
use Usdk\Core\Exceptions\APIException;
use Usdk\Core\Util;
use Usdk\Services\UsdkClientRawService;
use Usdk\Services\UsdkClientService;

/**
 * @phpstan-import-type NormalizedRequest from \Usdk\Core\BaseClient
 * @phpstan-import-type RequestOpts from \Usdk\RequestOptions
 */
class Client extends BaseClient
{
    public string $apiKey;

    /**
     * @api
     */
    public UsdkClientRawService $raw;

    /**
     * @api
     */
    private UsdkClientService $usdkClientService;

    /**
     * @param RequestOpts|null $requestOptions
     */
    public function __construct(
        public ?int $cacheTtl = null,
        ?string $apiKey = null,
        ?string $baseUrl = null,
        RequestOptions|array|null $requestOptions = null,
    ) {
        $this->apiKey = (string) ($apiKey ?? getenv('UAPI_API_KEY'));

        $baseUrl ??= getenv('UAPI_BASE_URL') ?: 'https://api.uapi.nl';

        $options = RequestOptions::parse(
            RequestOptions::with(
                uriFactory: Psr17FactoryDiscovery::findUriFactory(),
                streamFactory: Psr17FactoryDiscovery::findStreamFactory(),
                requestFactory: Psr17FactoryDiscovery::findRequestFactory(),
                transporter: Psr18ClientDiscovery::find(),
            ),
            $requestOptions,
        );

        parent::__construct(
            headers: [
                'x-cache-ttl' => $this->cacheTtl,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'User-Agent' => sprintf('uapi/PHP %s', VERSION),
                'X-Stainless-Lang' => 'php',
                'X-Stainless-Package-Version' => '0.0.1',
                'X-Stainless-Arch' => Util::machtype(),
                'X-Stainless-OS' => Util::ostype(),
                'X-Stainless-Runtime' => php_sapi_name(),
                'X-Stainless-Runtime-Version' => phpversion(),
            ],
            baseUrl: $baseUrl,
            options: $options
        );

        $this->raw = new UsdkClientRawService($this);
        $this->usdkClientService = new UsdkClientService($this);
    }

    /**
     * @api
     *
     * Extract Get
     *
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function extract(
        string $url,
        RequestOptions|array|null $requestOptions = null
    ): mixed {
        return $this->usdkClientService->extract($url, $requestOptions);
    }

    /**
     * @api
     *
     * Search Get
     *
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function search(
        string $query,
        RequestOptions|array|null $requestOptions = null
    ): mixed {
        return $this->usdkClientService->search($query, $requestOptions);
    }

    /** @return array<string,string> */
    protected function authHeaders(): array
    {
        return $this->apiKey ? ['X-API-Key' => $this->apiKey] : [];
    }

    /**
     * @internal
     *
     * @param string|list<string> $path
     * @param array<string,mixed> $query
     * @param array<string,string|int|list<string|int>|null> $headers
     * @param RequestOpts|null $opts
     *
     * @return array{NormalizedRequest, RequestOptions}
     */
    protected function buildRequest(
        string $method,
        string|array $path,
        array $query,
        array $headers,
        mixed $body,
        RequestOptions|array|null $opts,
    ): array {
        return parent::buildRequest(
            method: $method,
            path: $path,
            query: $query,
            headers: [...$this->authHeaders(), ...$headers],
            body: $body,
            opts: $opts,
        );
    }
}
