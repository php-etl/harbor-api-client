<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetReplicationPoliciesForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Forbidden');
    }
}