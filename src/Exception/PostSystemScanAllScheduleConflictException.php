<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostSystemScanAllScheduleConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('There is a "scanall" job in progress, so the request cannot be served.');
    }
}
