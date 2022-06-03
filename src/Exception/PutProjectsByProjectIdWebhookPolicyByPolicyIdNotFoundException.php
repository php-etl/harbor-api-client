<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Webhook policy ID does not exist.');
    }
}