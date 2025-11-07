<?php

namespace Usdk\Core\Exceptions;

class NotFoundException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'Usdk Not Found Exception';
}
