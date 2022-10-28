<?php

namespace Gyroscops\Harbor\Api\Exception;

class PatchScannerByRegistrationIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}
