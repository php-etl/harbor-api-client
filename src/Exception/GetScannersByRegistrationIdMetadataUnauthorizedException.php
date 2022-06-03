<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetScannersByRegistrationIdMetadataUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}