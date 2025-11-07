<?php

namespace Usdk\Core\Exceptions;

class AuthenticationException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Usdk Authentication Exception';
}
