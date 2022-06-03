<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostProjectBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Unsatisfied with constraints of the project creation.');
    }
}