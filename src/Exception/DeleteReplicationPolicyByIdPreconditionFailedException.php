<?php

namespace Harbor\Api\Exception;

class DeleteReplicationPolicyByIdPreconditionFailedException extends PreconditionFailedException
{
    public function __construct()
    {
        parent::__construct('Precondition Failed');
    }
}