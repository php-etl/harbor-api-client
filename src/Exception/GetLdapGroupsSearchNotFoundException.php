<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetLdapGroupsSearchNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('No ldap group found.');
    }
}