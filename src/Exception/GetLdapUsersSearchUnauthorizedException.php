<?php

namespace Harbor\Api\Exception;

class GetLdapUsersSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('User need to login first.');
    }
}