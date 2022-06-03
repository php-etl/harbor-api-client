<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostProjectConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('Project name already exists.');
    }
}