<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetScannersForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Request is not allowed, system role required');
    }
}