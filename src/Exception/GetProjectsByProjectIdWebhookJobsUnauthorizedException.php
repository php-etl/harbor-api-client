<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdWebhookJobsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('User need to log in first.');
    }
}