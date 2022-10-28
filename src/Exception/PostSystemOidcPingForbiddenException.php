<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostSystemOidcPingForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User does not have permission to call this API');
    }
}
