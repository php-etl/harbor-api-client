<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutUsersByUserIdCliSecretForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Non-admin user can only generate the cli secret of himself.');
    }
}
