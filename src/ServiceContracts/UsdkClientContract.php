<?php

declare(strict_types=1);

namespace Usdk\ServiceContracts;

use Usdk\Core\Exceptions\APIException;
use Usdk\RequestOptions;

/**
 * @phpstan-import-type RequestOpts from \Usdk\RequestOptions
 */
interface UsdkClientContract
{
    /**
     * @api
     *
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function extract(
        string $url,
        RequestOptions|array|null $requestOptions = null
    ): mixed;

    /**
     * @api
     *
     * @param RequestOpts|null $requestOptions
     *
     * @throws APIException
     */
    public function search(
        string $query,
        RequestOptions|array|null $requestOptions = null
    ): mixed;
}
