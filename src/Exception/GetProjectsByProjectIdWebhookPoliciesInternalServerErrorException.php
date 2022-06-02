<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdWebhookPoliciesInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}