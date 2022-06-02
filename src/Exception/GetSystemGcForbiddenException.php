<?php

namespace Harbor\Api\Exception;

class GetSystemGcForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User does not have permission of admin role.');
    }
}