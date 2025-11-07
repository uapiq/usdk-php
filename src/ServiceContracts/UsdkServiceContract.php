<?php

declare(strict_types=1);

namespace Usdk\ServiceContracts;

use Usdk\Core\Exceptions\APIException;
use Usdk\RequestOptions;

interface UsdkServiceContract
{
    /**
     * @api
     *
     * @param string $url
     *
     * @throws APIException
     */
    public function extract(
        $url,
        ?RequestOptions $requestOptions = null
    ): mixed;

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
    ): mixed;

    /**
     * @api
     *
     * @param string $query
     *
     * @throws APIException
     */
    public function search(
        $query,
        ?RequestOptions $requestOptions = null
    ): mixed;

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
    ): mixed;
}
