<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutUsersByUserIdPasswordUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Don\'t have authority to change password. Please check login status.');
    }
}