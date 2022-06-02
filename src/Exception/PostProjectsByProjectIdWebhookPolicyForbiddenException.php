<?php

namespace Harbor\Api\Exception;

class PostProjectsByProjectIdWebhookPolicyForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to create webhook policy of the project.');
    }
}