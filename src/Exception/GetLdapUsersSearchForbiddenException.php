<?php

namespace Harbor\Api\Exception;

class GetLdapUsersSearchForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Only admin has this authority.');
    }
}