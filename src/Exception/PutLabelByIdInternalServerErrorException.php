<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutLabelByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}
