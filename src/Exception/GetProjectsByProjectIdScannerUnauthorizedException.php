<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdScannerUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}