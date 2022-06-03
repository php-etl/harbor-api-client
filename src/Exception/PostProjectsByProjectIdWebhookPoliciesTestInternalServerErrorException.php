<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostProjectsByProjectIdWebhookPoliciesTestInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server errors.');
    }
}