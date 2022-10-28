<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostProjectsByProjectIdMemberConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('A user group with same group name already exist or an LDAP user group with same DN already exist.');
    }
}
