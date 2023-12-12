<?php

namespace Gyroscops\Harbor\Api\Exception;

class PingInstancesNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Instance not found (when instance is provided by ID).');
    }
}