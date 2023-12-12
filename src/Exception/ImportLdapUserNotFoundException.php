<?php

namespace Gyroscops\Harbor\Api\Exception;

class ImportLdapUserNotFoundException extends NotFoundException
{
    /**
     * @var \Gyroscops\Harbor\Api\Model\LdapFailedImportUser[][]
     */
    private $ldapFailedImportUserList;
    public function __construct($ldapFailedImportUserList)
    {
        parent::__construct('Failed import some users.');
        $this->ldapFailedImportUserList = $ldapFailedImportUserList;
    }
    public function getLdapFailedImportUserList()
    {
        return $this->ldapFailedImportUserList;
    }
}