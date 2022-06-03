<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutUsersByUserIdSysadminBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid user ID.');
    }
}