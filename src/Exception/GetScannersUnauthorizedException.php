<?php

namespace Harbor\Api\Exception;

class GetScannersUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}