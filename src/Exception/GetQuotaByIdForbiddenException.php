<?php

namespace Harbor\Api\Exception;

class GetQuotaByIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User does not have permission to call this API');
    }
}