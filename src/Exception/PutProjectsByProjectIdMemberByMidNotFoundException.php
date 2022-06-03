<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutProjectsByProjectIdMemberByMidNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('project or project member does not exist.');
    }
}