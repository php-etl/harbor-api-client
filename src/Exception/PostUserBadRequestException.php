<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostUserBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Unsatisfied with constraints of the user creation.');
    }
}