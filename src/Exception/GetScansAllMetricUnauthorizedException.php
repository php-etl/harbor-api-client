<?php

namespace Harbor\Api\Exception;

class GetScansAllMetricUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request');
    }
}