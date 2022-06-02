<?php

namespace Harbor\Api\Exception;

class PutReplicationPolicyByIdConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('Conflict');
    }
}