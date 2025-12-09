<?php

declare(strict_types=1);

namespace Usdk;

use Usdk\Core\Attributes\Required;
use Usdk\Core\Concerns\SdkModel;
use Usdk\Core\Concerns\SdkParams;
use Usdk\Core\Contracts\BaseModel;

/**
 * Search Get.
 *
 * @see Usdk\Services\UsdkService::search()
 *
 * @phpstan-type UsdkServiceSearchParamsShape = array{query: string}
 */
final class UsdkSearchParams implements BaseModel
{
    /** @use SdkModel<UsdkServiceSearchParamsShape> */
    use SdkModel;
    use SdkParams;

    #[Required]
    public string $query;

    /**
     * `new UsdkSearchParams()` is missing required properties by the API.
     *
     * To enforce required parameters use
     * ```
     * UsdkSearchParams::with(query: ...)
     * ```
     *
     * Otherwise ensure the following setters are called
     *
     * ```
     * (new UsdkSearchParams)->withQuery(...)
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
    public static function with(string $query): self
    {
        $obj = new self;

        $obj['query'] = $query;

        return $obj;
    }

    public function withQuery(string $query): self
    {
        $obj = clone $this;
        $obj['query'] = $query;

        return $obj;
    }
}
