<?php

namespace Harbor\Api\Exception;

class PostReplicationPolicyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}