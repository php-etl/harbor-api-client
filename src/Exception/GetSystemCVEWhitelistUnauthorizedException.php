<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetSystemCVEWhitelistUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('User is not authenticated.');
    }
}
