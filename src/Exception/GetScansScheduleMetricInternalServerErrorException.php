<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetScansScheduleMetricInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server error happened');
    }
}