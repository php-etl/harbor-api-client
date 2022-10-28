<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdRobotsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Project ID does not exist.');
    }
}
