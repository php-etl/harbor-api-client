<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdWebhookEventForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to list webhook jobs of the project.');
    }
}
