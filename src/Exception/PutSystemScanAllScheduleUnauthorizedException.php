<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutSystemScanAllScheduleUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('User need to log in first.');
    }
}
