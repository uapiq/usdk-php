<?php

declare(strict_types=1);

namespace Usdk\Services;

use Usdk\Client;
use Usdk\Core\Exceptions\APIException;
use Usdk\RequestOptions;
use Usdk\ServiceContracts\UsdkServiceContract;
use Usdk\UsdkExtractParams;
use Usdk\UsdkSearchParams;

final class UsdkService implements UsdkServiceContract
{
    /**
     * @internal
     */
    public function __construct(private Client $client) {}

    /**
     * @api
     *
     * Extract Get
     *
     * @param string $url
     *
     * @throws APIException
     */
    public function extract($url, ?RequestOptions $requestOptions = null): mixed
    {
        $params = ['url' => $url];

        return $this->extractRaw($params, $requestOptions);
    }

    /**
     * @api
     *
     * @param array<string, mixed> $params
     *
     * @throws APIException
     */
    public function extractRaw(
        array $params,
        ?RequestOptions $requestOptions = null
    ): mixed {
        [$parsed, $options] = UsdkExtractParams::parseRequest(
            $params,
            $requestOptions
        );

        // @phpstan-ignore-next-line;
        return $this->client->request(
            method: 'get',
            path: 'v1/extract',
            query: $parsed,
            options: $options,
            convert: 'mixed',
        );
    }

    /**
     * @api
     *
     * Search Get
     *
     * @param string $query
     *
     * @throws APIException
     */
    public function search(
        $query,
        ?RequestOptions $requestOptions = null
    ): mixed {
        $params = ['query' => $query];

        return $this->searchRaw($params, $requestOptions);
    }

    /**
     * @api
     *
     * @param array<string, mixed> $params
     *
     * @throws APIException
     */
    public function searchRaw(
        array $params,
        ?RequestOptions $requestOptions = null
    ): mixed {
        [$parsed, $options] = UsdkSearchParams::parseRequest(
            $params,
            $requestOptions
        );

        // @phpstan-ignore-next-line;
        return $this->client->request(
            method: 'get',
            path: 'v1/search',
            query: $parsed,
            options: $options,
            convert: 'mixed',
        );
    }
}
