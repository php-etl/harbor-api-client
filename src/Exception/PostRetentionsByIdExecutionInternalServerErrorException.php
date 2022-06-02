<?php

namespace Harbor\Api\Exception;

class PostRetentionsByIdExecutionInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}