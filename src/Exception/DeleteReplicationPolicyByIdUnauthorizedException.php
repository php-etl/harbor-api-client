<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteReplicationPolicyByIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}