<?php

namespace Harbor\Api\Exception;

class PutProjectsByProjectIdRobotByRobotIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}