<?php

namespace Harbor\Api\Exception;

class GetReplicationExecutionsByIdTasksInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}