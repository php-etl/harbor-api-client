<?php

namespace Harbor\Api\Exception;

class GetRetentionsByIdExecutionsByEidTasksInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}