<?php

namespace Harbor\Api\Exception;

class DeleteReplicationPolicyByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}