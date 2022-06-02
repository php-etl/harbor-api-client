<?php

namespace Harbor\Api\Exception;

class PostRegistryBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Unsatisfied with constraints of the registry creation.');
    }
}