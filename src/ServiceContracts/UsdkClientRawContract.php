<?php

declare(strict_types=1);

namespace Usdk\ServiceContracts;

use Usdk\Core\Contracts\BaseResponse;
use Usdk\Core\Exceptions\APIException;
use Usdk\RequestOptions;
use Usdk\UsdkExtractParams;
use Usdk\UsdkSearchParams;

/**
 * @phpstan-import-type RequestOpts from \Usdk\RequestOptions
 */
interface UsdkClientRawContract
{
    /**
     * @api
     *
     * @param array<string,mixed>|UsdkExtractParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function extract(
        array|UsdkExtractParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;

    /**
     * @api
     *
     * @param array<string,mixed>|UsdkSearchParams $params
     * @param RequestOpts|null $requestOptions
     *
     * @return BaseResponse<mixed>
     *
     * @throws APIException
     */
    public function search(
        array|UsdkSearchParams $params,
        RequestOptions|array|null $requestOptions = null,
    ): BaseResponse;
}
