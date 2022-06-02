<?php

namespace Harbor\Api\Exception;

class PostProjectsByProjectIdWebhookPoliciesTestForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to get webhook policy of the project.');
    }
}