<?php

namespace Harbor\Api\Exception;

class PostSystemGcScheduleBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid schedule type.');
    }
}