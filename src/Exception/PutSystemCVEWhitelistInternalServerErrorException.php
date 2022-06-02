<?php

namespace Harbor\Api\Exception;

class PutSystemCVEWhitelistInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}