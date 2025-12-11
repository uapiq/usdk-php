<?php

declare(strict_types=1);

namespace Usdk\Services;

use Usdk\Client;
use Usdk\Core\Exceptions\APIException;
use Usdk\Core\Util;
use Usdk\RequestOptions;
use Usdk\ServiceContracts\UsdkServiceContract;

final class UsdkService implements UsdkServiceContract
{
    /**
     * @api
     */
    public UsdkRawService $raw;

    /**
     * @internal
     */
    public function __construct(private Client $client)
    {
        $this->raw = new UsdkRawService($client);
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
     * @throws APIException
     */
    public function search(
        string $query,
        ?RequestOptions $requestOptions = null
    ): mixed {
        $params = Util::removeNulls(['query' => $query]);

        // @phpstan-ignore-next-line argument.type
        $response = $this->raw->search(params: $params, requestOptions: $requestOptions);

        return $response->parse();
    }
}
