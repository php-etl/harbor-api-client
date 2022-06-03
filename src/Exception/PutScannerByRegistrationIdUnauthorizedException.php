<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutScannerByRegistrationIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}