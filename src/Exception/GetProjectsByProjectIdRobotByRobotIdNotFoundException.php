<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdRobotByRobotIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('The robot account is not found.');
    }
}
