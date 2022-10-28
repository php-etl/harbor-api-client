<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetUsersBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid user ID.');
    }
}
