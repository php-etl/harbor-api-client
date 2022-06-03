<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteProjectsByProjectIdImmutabletagruleByIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to delete immutable tags of the project.');
    }
}