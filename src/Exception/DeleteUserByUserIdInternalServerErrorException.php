<?php

namespace Harbor\Api\Exception;

class DeleteUserByUserIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}