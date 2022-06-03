<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutScannerByRegistrationIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('The requested object is not found');
    }
}