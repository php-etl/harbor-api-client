<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetScannerOfProjectUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}