<?php

namespace Harbor\Api\Exception;

class GetRegistriesByIdInfoNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Registry not found');
    }
}