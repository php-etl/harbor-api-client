<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostRegistryUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('User need to log in first.');
    }
}