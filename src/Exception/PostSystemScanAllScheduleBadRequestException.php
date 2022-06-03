<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostSystemScanAllScheduleBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid schedule type.');
    }
}