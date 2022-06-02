<?php

namespace Harbor\Api\Exception;

class PostReplicationExecutionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad request.');
    }
}