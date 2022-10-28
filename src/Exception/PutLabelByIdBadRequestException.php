<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutLabelByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid parameters.');
    }
}
