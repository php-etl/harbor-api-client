<?php

namespace Harbor\Api\Exception;

class PutProjectByProjectIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}