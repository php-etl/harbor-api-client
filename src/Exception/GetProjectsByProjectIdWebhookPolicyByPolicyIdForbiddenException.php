<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to get webhook policy of the project.');
    }
}