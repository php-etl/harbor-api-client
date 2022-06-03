<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetSystemGcScheduleForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Only admin has this authority.');
    }
}