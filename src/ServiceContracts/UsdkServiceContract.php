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
     * @throws APIException
     */
    public function extract(
        string $url,
        ?RequestOptions $requestOptions = null
    ): mixed;

    /**
     * @api
     *
     * @throws APIException
     */
    public function search(
        string $query,
        ?RequestOptions $requestOptions = null
    ): mixed;
}
