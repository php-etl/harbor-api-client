<?php

namespace Harbor\Api\Exception;

class GetConfigurationForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User does not have permission of admin role.');
    }
}