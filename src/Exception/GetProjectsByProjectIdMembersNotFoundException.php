<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdMembersNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Project ID does not exist.');
    }
}
