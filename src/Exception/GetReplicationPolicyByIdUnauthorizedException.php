<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetReplicationPolicyByIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}
