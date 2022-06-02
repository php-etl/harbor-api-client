<?php

namespace Harbor\Api\Exception;

class GetRegistriesInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}