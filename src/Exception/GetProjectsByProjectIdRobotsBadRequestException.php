<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdRobotsBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('The project id is invalid.');
    }
}