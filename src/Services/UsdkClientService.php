<?php

declare(strict_types=1);

namespace Usdk\Services;

use Usdk\Client;
use Usdk\Core\Exceptions\APIException;
use Usdk\Core\Util;
use Usdk\RequestOptions;
use Usdk\ServiceContracts\UsdkClientContract;

/**
 * @phpstan-import-type RequestOpts from \Usdk\RequestOptions
 */
final class UsdkClientService implements UsdkClientContract
{
    /**
     * @api
     */
    public UsdkClientRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new UsdkClientRawService($client);
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
        $params = Util::removeNulls(['url' => $url]);

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->extract(params: $params, requestOptions: $requestOptions);

        return $response->parse();
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
        $params = Util::removeNulls(['query' => $query]);

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->search(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
