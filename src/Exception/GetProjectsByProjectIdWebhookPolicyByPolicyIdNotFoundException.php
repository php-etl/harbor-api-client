<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Webhook policy ID does not exist.');
    }
}