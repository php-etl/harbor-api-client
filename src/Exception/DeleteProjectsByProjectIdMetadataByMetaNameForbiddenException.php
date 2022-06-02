<?php

namespace Harbor\Api\Exception;

class DeleteProjectsByProjectIdMetadataByMetaNameForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User need to log in first.');
    }
}