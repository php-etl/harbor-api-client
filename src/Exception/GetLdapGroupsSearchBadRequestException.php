<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetLdapGroupsSearchBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('The Ldap group DN is invalid.');
    }
}