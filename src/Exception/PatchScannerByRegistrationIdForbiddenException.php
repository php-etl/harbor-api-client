<?php

namespace Harbor\Api\Exception;

class PatchScannerByRegistrationIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Request is not allowed');
    }
}