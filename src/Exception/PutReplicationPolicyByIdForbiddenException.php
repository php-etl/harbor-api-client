<?php

namespace Harbor\Api\Exception;

class PutReplicationPolicyByIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Forbidden');
    }
}