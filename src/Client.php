<?php

declare(strict_types=1);

namespace Usdk;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Usdk\Core\BaseClient;
use Usdk\Core\Exceptions\APIException;
use Usdk\Services\UsdkService;

class Client extends BaseClient
{
    public string $apiKey;

    /**
     * @api
     */
    private UsdkService $_usdkService;

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
            // x-release-please-start-version
            headers: [
                'x-cache-ttl' => $this->cacheTtl,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'User-Agent' => sprintf('uapi/PHP %s', '0.0.1'),
                'X-Stainless-Lang' => 'php',
                'X-Stainless-Package-Version' => '0.0.1',
                'X-Stainless-OS' => $this->getNormalizedOS(),
                'X-Stainless-Arch' => $this->getNormalizedArchitecture(),
                'X-Stainless-Runtime' => 'php',
                'X-Stainless-Runtime-Version' => phpversion(),
            ],
            // x-release-please-end
            baseUrl: $baseUrl,
            options: $options,
        );

        $this->_usdkService = new UsdkService($this);
    }

    /**
     * @api
     *
     * Extract Get
     *
     * @param array{url: string}|UsdkExtractParams $params
     *
     * @throws APIException
     */
    public function extract(
        array|UsdkExtractParams $params,
        ?RequestOptions $requestOptions = null
    ): mixed {
        return $this->_usdkService->extract($params, $requestOptions);
    }

    /**
     * @api
     *
     * Search Get
     *
     * @param array{query: string}|UsdkSearchParams $params
     *
     * @throws APIException
     */
    public function search(
        array|UsdkSearchParams $params,
        ?RequestOptions $requestOptions = null
    ): mixed {
        return $this->_usdkService->search($params, $requestOptions);
    }

    /** @return array<string,string> */
    protected function authHeaders(): array
    {
        return $this->apiKey ? ['X-API-Key' => $this->apiKey] : [];
    }
}
