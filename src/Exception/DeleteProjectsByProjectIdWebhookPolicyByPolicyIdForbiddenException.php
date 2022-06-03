<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to delete webhook policy of the project.');
    }
}