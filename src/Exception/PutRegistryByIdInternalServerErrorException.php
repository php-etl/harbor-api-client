<?php

namespace Harbor\Api\Exception;

class PutRegistryByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}