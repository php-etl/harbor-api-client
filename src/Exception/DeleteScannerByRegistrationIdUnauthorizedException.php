<?php

namespace Harbor\Api\Exception;

class DeleteScannerByRegistrationIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}