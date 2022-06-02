<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdScannerInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server error happened');
    }
}