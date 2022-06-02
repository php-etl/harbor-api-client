<?php

namespace Harbor\Api\Exception;

class GetUserByUserIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid user ID.');
    }
}