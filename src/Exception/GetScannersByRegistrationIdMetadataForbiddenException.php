<?php

namespace Harbor\Api\Exception;

class GetScannersByRegistrationIdMetadataForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Request is not allowed');
    }
}