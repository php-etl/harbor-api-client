<?php

namespace Harbor\Api\Exception;

class PostProjectsByProjectIdMetadataForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User does not have permission to the project.');
    }
}