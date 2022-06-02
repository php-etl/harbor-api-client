<?php

namespace Harbor\Api\Exception;

class PutSystemGcScheduleBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid schedule type.');
    }
}