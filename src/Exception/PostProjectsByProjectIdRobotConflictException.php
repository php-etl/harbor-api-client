<?php

namespace Harbor\Api\Exception;

class PostProjectsByProjectIdRobotConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('An robot account with same name already exist in the project.');
    }
}