<?php

namespace Usdk\Core\Exceptions;

class UnprocessableEntityException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Usdk Unprocessable Entity Exception';
}
