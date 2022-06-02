<?php

namespace Harbor\Api\Exception;

class PostScannerForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Request is not allowed, system role required');
    }
}