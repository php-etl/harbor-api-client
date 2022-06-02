<?php

namespace Harbor\Api\Exception;

class PutUsersByUserIdPasswordForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('The caller does not have permission to update the password of the user with given ID, or the old password in request body is not correct.');
    }
}