<?php

namespace Harbor\Api\Exception;

class GetRetentionByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}