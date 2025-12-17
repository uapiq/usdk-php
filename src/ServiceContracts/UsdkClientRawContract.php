<?php

declare(strict_types=1);

namespace Usdk\ServiceContracts;

use Usdk\Core\Contracts\BaseResponse;
use Usdk\Core\Exceptions\APIException;
use Usdk\RequestOptions;
use Usdk\UsdkExtractParams;
use Usdk\UsdkSearchParams;

interface UsdkClientRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|UsdkExtractParams $params
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function extract(
        array|UsdkExtractParams $params,
        ?RequestOptions $requestOptions = null
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|UsdkSearchParams $params
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function search(
        array|UsdkSearchParams $params,
        ?RequestOptions $requestOptions = null
    ): BaseResponse;
}
