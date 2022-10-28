<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetReplicationPolicyByIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Forbidden');
    }
}
