<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutReplicationPolicyByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}
