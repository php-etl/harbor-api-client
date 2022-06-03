<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostRegistriesPingNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Registry not found (when registry is provided by ID).');
    }
}