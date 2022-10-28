<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostReplicationPolicyForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Forbidden');
    }
}
