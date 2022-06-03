<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteReplicationPolicyByIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Forbidden');
    }
}