<?php

namespace Gyroscops\Harbor\Api\Model;

class LdapUser
{
    /**
     * ldap username.
     *
     * @var string|null
     */
    protected $username;
    /**
     * The user realname from "uid" or "cn" attribute.
     *
     * @var string|null
     */
    protected $realname;
    /**
     * The user email address from "mail" or "email" attribute.
     *
     * @var string|null
     */
    protected $email;
    /**
     * ldap username.
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * ldap username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->username = $username;
        return $this;
    }
    /**
     * The user realname from "uid" or "cn" attribute.
     *
     * @return string|null
     */
    public function getRealname() : ?string
    {
        return $this->realname;
    }
    /**
     * The user realname from "uid" or "cn" attribute.
     *
     * @param string|null $realname
     *
     * @return self
     */
    public function setRealname(?string $realname) : self
    {
        $this->realname = $realname;
        return $this;
    }
    /**
     * The user email address from "mail" or "email" attribute.
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * The user email address from "mail" or "email" attribute.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
}