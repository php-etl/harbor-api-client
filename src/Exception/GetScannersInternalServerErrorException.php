<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetScannersInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server error happened');
    }
}