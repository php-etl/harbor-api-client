<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetReplicationAdaptersForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Forbidden.');
    }
}