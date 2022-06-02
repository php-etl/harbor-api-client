<?php

namespace Harbor\Api\Exception;

class PostProjectsByProjectIdRobotBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Project id is not valid.');
    }
}