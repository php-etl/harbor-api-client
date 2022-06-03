<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetLabelsBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid parameters.');
    }
}