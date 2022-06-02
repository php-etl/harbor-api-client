<?php

namespace Harbor\Api\Exception;

class GetReplicationPoliciesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}