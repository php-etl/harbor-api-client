<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteProjectsByProjectIdRobotByRobotIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('The robot account is not found.');
    }
}
