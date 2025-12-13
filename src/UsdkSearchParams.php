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
 * @see Usdk\Services\UsdkClientService::search()
 *
 * @phpstan-type UsdkClientServiceSearchParamsShape = array{query: string}
 */
final class UsdkSearchParams implements BaseModel
{
    /** @use SdkModel<UsdkClientServiceSearchParamsShape> */
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
        $self = new self;

        $self['query'] = $query;

        return $self;
    }

    public function withQuery(string $query): self
    {
        $self = clone $this;
        $self['query'] = $query;

        return $self;
    }
}
