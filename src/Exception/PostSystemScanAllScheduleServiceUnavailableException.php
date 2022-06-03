<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostSystemScanAllScheduleServiceUnavailableException extends ServiceUnavailableException
{
    public function __construct()
    {
        parent::__construct('Harbor is not deployed with scanners.');
    }
}