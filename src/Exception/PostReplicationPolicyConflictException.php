<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostReplicationPolicyConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('Conflict');
    }
}