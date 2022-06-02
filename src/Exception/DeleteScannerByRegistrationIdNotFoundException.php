<?php

namespace Harbor\Api\Exception;

class DeleteScannerByRegistrationIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('The requested object is not found');
    }
}