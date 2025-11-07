<?php

declare(strict_types=1);

namespace Usdk\Core\Conversion\Contracts;

/**
 * @internal
 */
interface ConverterSource
{
    public static function converter(): Converter;
}
