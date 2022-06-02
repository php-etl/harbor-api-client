<?php

namespace Harbor\Api\Exception;

class PutScannerByRegistrationIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Request is not allowed, system role required');
    }
}