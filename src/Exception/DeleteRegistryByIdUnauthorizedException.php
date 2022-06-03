<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteRegistryByIdUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Only admin has this authority.');
    }
}