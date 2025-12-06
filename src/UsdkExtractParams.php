<?php

declare(strict_types=1);

namespace Usdk;

use Usdk\Core\Attributes\Api;
use Usdk\Core\Concerns\SdkModel;
use Usdk\Core\Concerns\SdkParams;
use Usdk\Core\Contracts\BaseModel;

/**
 * Extract Get.
 *
 * @see Usdk\Services\UsdkService::extract()
 *
 * @phpstan-type UsdkServiceExtractParamsShape = array{url: string}
 */
final class UsdkExtractParams implements BaseModel
{
    /** @use SdkModel<UsdkServiceExtractParamsShape> */
    use SdkModel;
    use SdkParams;

    #[Api]
    public string $url;

    /**
     * `new UsdkExtractParams()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * UsdkExtractParams::with(url: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new UsdkExtractParams)->withURL(...)
     * ```
     */
    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     */
    public static function with(string $url): self
    {
        $obj = new self;

        $obj['url'] = $url;

        return $obj;
    }

    public function withURL(string $url): self
    {
        $obj = clone $this;
        $obj['url'] = $url;

        return $obj;
    }
}
