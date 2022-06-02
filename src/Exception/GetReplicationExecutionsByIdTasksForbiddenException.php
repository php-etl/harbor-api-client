<?php

namespace Harbor\Api\Exception;

class GetReplicationExecutionsByIdTasksForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User has no privilege for the operation.');
    }
}