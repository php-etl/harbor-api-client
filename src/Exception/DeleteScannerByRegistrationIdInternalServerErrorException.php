<?php

namespace Harbor\Api\Exception;

class DeleteScannerByRegistrationIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server error happened');
    }
}