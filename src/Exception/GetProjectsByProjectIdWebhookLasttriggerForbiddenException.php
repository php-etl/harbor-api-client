<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdWebhookLasttriggerForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to get webhook policy of the project.');
    }
}
