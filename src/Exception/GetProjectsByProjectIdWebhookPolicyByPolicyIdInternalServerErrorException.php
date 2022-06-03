<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server errors.');
    }
}