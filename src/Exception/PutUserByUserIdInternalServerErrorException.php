<?php

namespace Harbor\Api\Exception;

class PutUserByUserIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}