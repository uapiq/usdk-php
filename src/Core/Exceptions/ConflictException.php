<?php

namespace Usdk\Core\Exceptions;

class ConflictException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Usdk Conflict Exception';
}
