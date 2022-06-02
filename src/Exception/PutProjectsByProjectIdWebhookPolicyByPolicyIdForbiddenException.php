<?php

namespace Harbor\Api\Exception;

class PutProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to update webhook policy of the project.');
    }
}