<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutReplicationPolicyByIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}