<?php

namespace Usdk\Core\Exceptions;

class RateLimitException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Usdk Rate Limit Exception';
}
