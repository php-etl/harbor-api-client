<?php

namespace Harbor\Api\Exception;

class PutUsersByUserIdPasswordInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}