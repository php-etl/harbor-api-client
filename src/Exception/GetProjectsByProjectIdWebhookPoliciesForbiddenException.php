<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdWebhookPoliciesForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to list webhook policies of the project.');
    }
}