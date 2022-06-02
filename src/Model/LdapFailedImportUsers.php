<?php

namespace Harbor\Api\Model;

class LdapFailedImportUsers
{
    /**
     * the uid can't add to system.
     *
     * @var string
     */
    protected $ldapUid;
    /**
     * fail reason.
     *
     * @var string
     */
    protected $error;
    /**
     * the uid can't add to system.
     *
     * @return string
     */
    public function getLdapUid() : string
    {
        return $this->ldapUid;
    }
    /**
     * the uid can't add to system.
     *
     * @param string $ldapUid
     *
     * @return self
     */
    public function setLdapUid(string $ldapUid) : self
    {
        $this->ldapUid = $ldapUid;
        return $this;
    }
    /**
     * fail reason.
     *
     * @return string
     */
    public function getError() : string
    {
        return $this->error;
    }
    /**
     * fail reason.
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error) : self
    {
        $this->error = $error;
        return $this;
    }
}