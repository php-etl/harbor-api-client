<?php

namespace Harbor\Api\Exception;

class GetScansScheduleMetricUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}