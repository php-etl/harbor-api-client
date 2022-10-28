<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutProjectsByProjectIdMemberByMidForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User in session does not have permission to the project.');
    }
}
