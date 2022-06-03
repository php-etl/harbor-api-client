<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutProjectsByProjectIdScannerNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('The requested object is not found');
    }
}