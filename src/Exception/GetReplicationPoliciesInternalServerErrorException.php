<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetReplicationPoliciesInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server Error');
    }
}
