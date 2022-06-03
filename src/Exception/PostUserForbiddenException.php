<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostUserForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User registration can only be used by admin role user when self-registration is off.');
    }
}