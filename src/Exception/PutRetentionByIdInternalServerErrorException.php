<?php

namespace Harbor\Api\Exception;

class PutRetentionByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}