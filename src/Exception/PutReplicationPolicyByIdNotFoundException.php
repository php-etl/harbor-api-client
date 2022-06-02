<?php

namespace Harbor\Api\Exception;

class PutReplicationPolicyByIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Not Found');
    }
}