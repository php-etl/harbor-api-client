<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostProjectsByProjectIdMemberBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Illegal format of project member or project id is invalid, or LDAP DN is invalid.');
    }
}