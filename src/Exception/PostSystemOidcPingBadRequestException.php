<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostSystemOidcPingBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('The ping failed');
    }
}