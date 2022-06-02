<?php

namespace Harbor\Api\Model;

class LdapUsers
{
    /**
     * system will try to guess the user email address form "mail" or "email" attribute.
     *
     * @var string
     */
    protected $ldapEmail;
    /**
     * system will try to guess the user realname form "uid" or "cn" attribute.
     *
     * @var string
     */
    protected $ldapRealname;
    /**
     * search ldap user name based on ldapconf.
     *
     * @var string
     */
    protected $ldapUsername;
    /**
     * system will try to guess the user email address form "mail" or "email" attribute.
     *
     * @return string
     */
    public function getLdapEmail() : string
    {
        return $this->ldapEmail;
    }
    /**
     * system will try to guess the user email address form "mail" or "email" attribute.
     *
     * @param string $ldapEmail
     *
     * @return self
     */
    public function setLdapEmail(string $ldapEmail) : self
    {
        $this->ldapEmail = $ldapEmail;
        return $this;
    }
    /**
     * system will try to guess the user realname form "uid" or "cn" attribute.
     *
     * @return string
     */
    public function getLdapRealname() : string
    {
        return $this->ldapRealname;
    }
    /**
     * system will try to guess the user realname form "uid" or "cn" attribute.
     *
     * @param string $ldapRealname
     *
     * @return self
     */
    public function setLdapRealname(string $ldapRealname) : self
    {
        $this->ldapRealname = $ldapRealname;
        return $this;
    }
    /**
     * search ldap user name based on ldapconf.
     *
     * @return string
     */
    public function getLdapUsername() : string
    {
        return $this->ldapUsername;
    }
    /**
     * search ldap user name based on ldapconf.
     *
     * @param string $ldapUsername
     *
     * @return self
     */
    public function setLdapUsername(string $ldapUsername) : self
    {
        $this->ldapUsername = $ldapUsername;
        return $this;
    }
}