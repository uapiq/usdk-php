<?php

declare(strict_types=1);

namespace Usdk\ServiceContracts;

use Usdk\Core\Exceptions\APIException;
use Usdk\RequestOptions;
use Usdk\UsdkExtractParams;
use Usdk\UsdkSearchParams;

interface UsdkServiceContract
{
    /**
     * @api
     *
     * @param array<mixed>|UsdkExtractParams $params
     *
     * @throws APIException
     */
    public function extract(
        array|UsdkExtractParams $params,
        ?RequestOptions $requestOptions = null
    ): mixed;

    /**
     * @api
     *
     * @param array<mixed>|UsdkSearchParams $params
     *
     * @throws APIException
     */
    public function search(
        array|UsdkSearchParams $params,
        ?RequestOptions $requestOptions = null
    ): mixed;
}
