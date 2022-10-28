<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdMemberByMidNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Project or projet member does not exist.');
    }
}
