<?php

namespace Harbor\Api\Exception;

class PostReplicationPolicyBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}