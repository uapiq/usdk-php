<?php

namespace Usdk\Core\Exceptions;

class PermissionDeniedException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Usdk Permission Denied Exception';
}
