<?php

namespace Harbor\Api\Exception;

class GetReplicationPolicyByIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Not Found');
    }
}