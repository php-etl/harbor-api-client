<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutLabelByIdConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('The label with the same name already exists.');
    }
}