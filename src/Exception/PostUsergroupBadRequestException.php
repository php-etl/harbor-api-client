<?php

namespace Harbor\Api\Exception;

class PostUsergroupBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid LDAP group DN.');
    }
}