<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostScannersPingInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server error happened');
    }
}