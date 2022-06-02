<?php

namespace Harbor\Api\Exception;

class PostUsergroupConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('A user group with same group name already exist, or an LDAP user group with same DN already exist.');
    }
}