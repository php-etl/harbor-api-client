<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetUsersCurrentPermissionsInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal errors.');
    }
}
