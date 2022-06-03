<?php

namespace Gyroscops\Harbor\Api\Exception;

class PatchScannerByRegistrationIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server error happened');
    }
}