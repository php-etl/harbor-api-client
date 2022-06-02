<?php

namespace Harbor\Api\Exception;

class DeleteProjectByProjectIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User need to log in first.');
    }
}