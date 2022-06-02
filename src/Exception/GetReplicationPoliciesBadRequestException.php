<?php

namespace Harbor\Api\Exception;

class GetReplicationPoliciesBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}