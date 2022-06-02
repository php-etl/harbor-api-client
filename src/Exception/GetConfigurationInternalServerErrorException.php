<?php

namespace Harbor\Api\Exception;

class GetConfigurationInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}