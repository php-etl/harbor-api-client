<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdWebhookJobsForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to list webhook jobs of the project.');
    }
}
