<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetScannerByRegistrationIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}