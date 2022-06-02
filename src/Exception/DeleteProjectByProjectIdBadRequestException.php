<?php

namespace Harbor\Api\Exception;

class DeleteProjectByProjectIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid project id.');
    }
}