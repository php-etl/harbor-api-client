<?php

namespace Harbor\Api\Exception;

class PostProjectsByProjectIdWebhookPolicyInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}