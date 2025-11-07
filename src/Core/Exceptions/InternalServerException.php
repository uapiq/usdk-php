<?php

namespace Usdk\Core\Exceptions;

class InternalServerException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Usdk Internal Server Exception';
}
