<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteLabelByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid parameters.');
    }
}
