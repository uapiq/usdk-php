<?php

declare(strict_types=1);

namespace Usdk\Core\Conversion\Contracts;

use Usdk\Core\Conversion\CoerceState;
use Usdk\Core\Conversion\DumpState;

/**
 * @internal
 */
interface Converter
{
    /**
     * @internal
     */
    public function coerce(mixed $value, CoerceState $state): mixed;

    /**
     * @internal
     */
    public function dump(mixed $value, DumpState $state): mixed;
}
