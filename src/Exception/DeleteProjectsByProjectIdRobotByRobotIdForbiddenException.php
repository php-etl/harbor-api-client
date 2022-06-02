<?php

namespace Harbor\Api\Exception;

class DeleteProjectsByProjectIdRobotByRobotIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User in session does not have permission to the project.');
    }
}