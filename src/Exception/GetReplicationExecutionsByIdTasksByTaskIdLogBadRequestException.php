<?php

namespace Harbor\Api\Exception;

class GetReplicationExecutionsByIdTasksByTaskIdLogBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad request.');
    }
}