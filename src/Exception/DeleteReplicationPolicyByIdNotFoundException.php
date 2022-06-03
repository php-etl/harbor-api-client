<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteReplicationPolicyByIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Not Found');
    }
}