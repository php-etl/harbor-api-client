<?php

namespace Harbor\Api\Exception;

class GetReplicationPolicyByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}