<?php

namespace Harbor\Api\Exception;

class PostLdapUsersImportNotFoundException extends NotFoundException
{
    /**
     * @var \Harbor\Api\Model\LdapFailedImportUsers[][]
     */
    private $ldapFailedImportUsersList;
    public function __construct($ldapFailedImportUsersList)
    {
        parent::__construct('Failed import some users.');
        $this->ldapFailedImportUsersList = $ldapFailedImportUsersList;
    }
    public function getLdapFailedImportUsersList()
    {
        return $this->ldapFailedImportUsersList;
    }
}