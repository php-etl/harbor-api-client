<?php

namespace Harbor\Api\Exception;

class PutRegistryByIdConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('Registry name is already used.');
    }
}