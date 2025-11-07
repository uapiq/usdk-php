<?php

declare(strict_types=1);

namespace Usdk\Core\Conversion;

use Usdk\Core\Conversion\Concerns\ArrayOf;
use Usdk\Core\Conversion\Contracts\Converter;

/**
 * @internal
 */
final class MapOf implements Converter
{
    use ArrayOf;
}
