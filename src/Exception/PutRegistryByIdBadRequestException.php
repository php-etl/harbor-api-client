<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutRegistryByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('The registry is associated with policy which is enabled.');
    }
}
