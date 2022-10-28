<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetReplicationExecutionByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad request.');
    }
}
