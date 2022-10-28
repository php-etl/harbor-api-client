<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutProjectsByProjectIdScannerUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}
