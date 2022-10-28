<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetSysteminfoInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal error.');
    }
}
