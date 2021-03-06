<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutQuotaByIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User does not have permission to the quota.');
    }
}