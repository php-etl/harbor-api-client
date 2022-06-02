<?php

namespace Harbor\Api\Exception;

class GetSystemCVEWhitelistInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}