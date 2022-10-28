<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostScannersPingUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}
