<?php

namespace Harbor\Api\Exception;

class PutRetentionByIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission.');
    }
}