<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutSystemCVEWhitelistUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('User is not authenticated.');
    }
}
