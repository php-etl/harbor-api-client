<?php

namespace Harbor\Api\Exception;

class PutReplicationExecutionByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}