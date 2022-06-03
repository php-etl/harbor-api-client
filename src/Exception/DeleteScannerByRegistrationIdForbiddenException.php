<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteScannerByRegistrationIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Request is not allowed, system role required or registration is immutable');
    }
}