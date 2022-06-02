<?php

namespace Harbor\Api\Exception;

class PostLabelConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('Label with the same name and same scope already exists.');
    }
}