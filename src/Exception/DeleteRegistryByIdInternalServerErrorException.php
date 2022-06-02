<?php

namespace Harbor\Api\Exception;

class DeleteRegistryByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}