<?php

namespace Harbor\Api\Exception;

class GetReplicationExecutionsByIdTasksBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad request.');
    }
}