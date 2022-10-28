<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdImmutabletagrulesForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to list immutable tag rules of the project.');
    }
}
