<?php

namespace Gyroscops\Harbor\Api\Model;

class LdapImportUsers
{
    /**
     * selected uid list
     *
     * @var string[]|null
     */
    protected $ldapUidList;
    /**
     * selected uid list
     *
     * @return string[]|null
     */
    public function getLdapUidList(): ?array
    {
        return $this->ldapUidList;
    }
    /**
     * selected uid list
     *
     * @param string[]|null $ldapUidList
     *
     * @return self
     */
    public function setLdapUidList(?array $ldapUidList): self
    {
        $this->ldapUidList = $ldapUidList;
        return $this;
    }
}
