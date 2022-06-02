<?php

namespace Harbor\Api\Exception;

class GetReplicationExecutionsInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}