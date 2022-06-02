<?php

namespace Harbor\Api\Exception;

class GetReplicationExecutionsByIdTasksByTaskIdLogInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}