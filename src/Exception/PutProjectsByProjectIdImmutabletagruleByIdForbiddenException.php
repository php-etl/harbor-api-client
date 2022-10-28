<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutProjectsByProjectIdImmutabletagruleByIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission to update the immutable tag rule of the project.');
    }
}
