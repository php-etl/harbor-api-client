<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdWebhookJobsInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}