<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetReplicationPolicyByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server Error');
    }
}