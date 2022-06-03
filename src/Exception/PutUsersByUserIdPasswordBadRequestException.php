<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutUsersByUserIdPasswordBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid user ID; Old password is blank; New password is blank.');
    }
}