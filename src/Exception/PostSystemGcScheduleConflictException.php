<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostSystemGcScheduleConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('There is a "gc" job in progress, so the request cannot be served.');
    }
}