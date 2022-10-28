<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostUsergroupForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User in session does not have permission to the user group.');
    }
}
