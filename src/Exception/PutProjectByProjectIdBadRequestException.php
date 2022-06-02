<?php

namespace Harbor\Api\Exception;

class PutProjectByProjectIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Illegal format of provided ID value.');
    }
}