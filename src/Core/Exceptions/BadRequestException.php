<?php

namespace Usdk\Core\Exceptions;

class BadRequestException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Usdk Bad Request Exception';
}
