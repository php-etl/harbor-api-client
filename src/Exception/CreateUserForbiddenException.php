<?php

namespace Gyroscops\Harbor\Api\Exception;

class CreateUserForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('When the  self registration is disabled, non-admin does not have permission to create user.  When self registration is enabled, this API can only be called from UI portal, calling it via script will get a 403 error.');
    }
}