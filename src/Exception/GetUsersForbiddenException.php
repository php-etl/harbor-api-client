<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetUsersForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User does not have permission of admin role.');
    }
}