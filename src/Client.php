<?php

declare(strict_types=1);

namespace Usdk;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Usdk\Core\BaseClient;
use Usdk\Core\Exceptions\APIException;
use Usdk\Core\Util;
use Usdk\Services\UsdkRawService;
use Usdk\Services\UsdkService;

class Client extends BaseClient
{
    public string $apiKey;

    /**
     * @api
     */
    public UsdkRawService $raw;

    /**
     * @api
     */
    private UsdkService $usdkService;

    public function __construct(
        public ?int $cacheTtl = null,
        ?string $apiKey = null,
        ?string $baseUrl = null,
    ) {
        $this->apiKey = (string) ($apiKey ?? getenv('UAPI_API_KEY'));

        $baseUrl ??= getenv('UAPI_BASE_URL') ?: 'https://api.uapi.nl';

        $options = RequestOptions::with(
            uriFactory: Psr17FactoryDiscovery::findUriFactory(),
            streamFactory: Psr17FactoryDiscovery::findStreamFactory(),
            requestFactory: Psr17FactoryDiscovery::findRequestFactory(),
            transporter: Psr18ClientDiscovery::find(),
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

        $this->raw = new UsdkRawService($this);
        $this->usdkService = new UsdkService($this);
    }

    /**
     * @api
     *
     * Extract Get
     *
     * @throws APIException
     */
    public function extract(
        string $url,
        ?RequestOptions $requestOptions = null
    ): mixed {
        return $this->usdkService->extract(STAINLESS_FIXME_params, $requestOptions);
    }

    /**
     * @api
     *
     * Search Get
     *
     * @throws APIException
     */
    public function search(
        string $query,
        ?RequestOptions $requestOptions = null
    ): mixed {
        return $this->usdkService->search(STAINLESS_FIXME_params, $requestOptions);
    }

    /** @return array<string,string> */
    protected function authHeaders(): array
    {
        return $this->apiKey ? ['X-API-Key' => $this->apiKey] : [];
    }
}
