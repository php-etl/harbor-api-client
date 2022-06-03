<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostProjectsByProjectIdImmutabletagruleForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to get immutable tag rule of the project.');
    }
}