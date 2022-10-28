<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostScannerInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server error happened');
    }
}
