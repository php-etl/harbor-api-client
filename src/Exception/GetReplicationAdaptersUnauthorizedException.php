<?php

namespace Harbor\Api\Exception;

class GetReplicationAdaptersUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized.');
    }
}