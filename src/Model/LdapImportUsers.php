<?php

namespace Harbor\Api\Model;

class LdapImportUsers
{
    /**
     * selected uid list
     *
     * @var string[]
     */
    protected $ldapUidList;
    /**
     * selected uid list
     *
     * @return string[]
     */
    public function getLdapUidList() : array
    {
        return $this->ldapUidList;
    }
    /**
     * selected uid list
     *
     * @param string[] $ldapUidList
     *
     * @return self
     */
    public function setLdapUidList(array $ldapUidList) : self
    {
        $this->ldapUidList = $ldapUidList;
        return $this;
    }
}