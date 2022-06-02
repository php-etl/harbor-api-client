<?php

namespace Harbor\Api\Exception;

class PostRegistryConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('Registry name already exists.');
    }
}