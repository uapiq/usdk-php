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
     * @param array{url: string}|UsdkExtractParams $params
     *
     * @throws APIException
     */
    public function extract(
        array|UsdkExtractParams $params,
        ?RequestOptions $requestOptions = null
    ): mixed {
        [$parsed, $options] = UsdkExtractParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
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
     * @param array{query: string}|UsdkSearchParams $params
     *
     * @throws APIException
     */
    public function search(
        array|UsdkSearchParams $params,
        ?RequestOptions $requestOptions = null
    ): mixed {
        [$parsed, $options] = UsdkSearchParams::parseRequest(
            $params,
            $requestOptions,
        );

        // @phpstan-ignore-next-line return.type
        return $this->client->request(
            method: 'get',
            path: 'v1/search',
            query: $parsed,
            options: $options,
            convert: 'mixed',
        );
    }
}
