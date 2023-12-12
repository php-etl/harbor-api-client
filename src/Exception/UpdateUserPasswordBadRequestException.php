<?php

namespace Gyroscops\Harbor\Api\Exception;

class UpdateUserPasswordBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid user ID; Password does not meet requirement');
    }
}