<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdMemberByMidUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('User need to log in first.');
    }
}