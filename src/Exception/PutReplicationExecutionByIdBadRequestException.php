<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutReplicationExecutionByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad request.');
    }
}