<?php

namespace Harbor\Api\Exception;

class DeleteRegistryByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Registry\'s ID is invalid or the registry is used by policies.');
    }
}