<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetCurrentUserPermissionsInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal errors.');
    }
}