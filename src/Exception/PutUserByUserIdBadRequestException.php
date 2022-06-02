<?php

namespace Harbor\Api\Exception;

class PutUserByUserIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid user ID.');
    }
}