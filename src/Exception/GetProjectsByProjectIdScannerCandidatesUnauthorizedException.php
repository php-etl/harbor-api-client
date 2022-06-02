<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdScannerCandidatesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}