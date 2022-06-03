<?php

namespace Gyroscops\Harbor\Api\Model;

class LdapConf
{
    /**
     * The url of ldap service.
     *
     * @var string
     */
    protected $ldapUrl;
    /**
     * The serach uid from ldap service attributes.
     *
     * @var string
     */
    protected $ldapUid;
    /**
     * The search dn of ldap service.
     *
     * @var string
     */
    protected $ldapSearchDn;
    /**
     * The connect timeout of ldap service(second).
     *
     * @var int
     */
    protected $ldapConnectionTimeout;
    /**
     * The search password of ldap service.
     *
     * @var string
     */
    protected $ldapSearchPassword;
    /**
     * The serach scope of ldap service.
     *
     * @var int
     */
    protected $ldapScope;
    /**
     * The base dn of ldap service.
     *
     * @var string
     */
    protected $ldapBaseDn;
    /**
     * The serach filter of ldap service.
     *
     * @var string
     */
    protected $ldapFilter;
    /**
     * The url of ldap service.
     *
     * @return string
     */
    public function getLdapUrl() : string
    {
        return $this->ldapUrl;
    }
    /**
     * The url of ldap service.
     *
     * @param string $ldapUrl
     *
     * @return self
     */
    public function setLdapUrl(string $ldapUrl) : self
    {
        $this->ldapUrl = $ldapUrl;
        return $this;
    }
    /**
     * The serach uid from ldap service attributes.
     *
     * @return string
     */
    public function getLdapUid() : string
    {
        return $this->ldapUid;
    }
    /**
     * The serach uid from ldap service attributes.
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
     * The search dn of ldap service.
     *
     * @return string
     */
    public function getLdapSearchDn() : string
    {
        return $this->ldapSearchDn;
    }
    /**
     * The search dn of ldap service.
     *
     * @param string $ldapSearchDn
     *
     * @return self
     */
    public function setLdapSearchDn(string $ldapSearchDn) : self
    {
        $this->ldapSearchDn = $ldapSearchDn;
        return $this;
    }
    /**
     * The connect timeout of ldap service(second).
     *
     * @return int
     */
    public function getLdapConnectionTimeout() : int
    {
        return $this->ldapConnectionTimeout;
    }
    /**
     * The connect timeout of ldap service(second).
     *
     * @param int $ldapConnectionTimeout
     *
     * @return self
     */
    public function setLdapConnectionTimeout(int $ldapConnectionTimeout) : self
    {
        $this->ldapConnectionTimeout = $ldapConnectionTimeout;
        return $this;
    }
    /**
     * The search password of ldap service.
     *
     * @return string
     */
    public function getLdapSearchPassword() : string
    {
        return $this->ldapSearchPassword;
    }
    /**
     * The search password of ldap service.
     *
     * @param string $ldapSearchPassword
     *
     * @return self
     */
    public function setLdapSearchPassword(string $ldapSearchPassword) : self
    {
        $this->ldapSearchPassword = $ldapSearchPassword;
        return $this;
    }
    /**
     * The serach scope of ldap service.
     *
     * @return int
     */
    public function getLdapScope() : int
    {
        return $this->ldapScope;
    }
    /**
     * The serach scope of ldap service.
     *
     * @param int $ldapScope
     *
     * @return self
     */
    public function setLdapScope(int $ldapScope) : self
    {
        $this->ldapScope = $ldapScope;
        return $this;
    }
    /**
     * The base dn of ldap service.
     *
     * @return string
     */
    public function getLdapBaseDn() : string
    {
        return $this->ldapBaseDn;
    }
    /**
     * The base dn of ldap service.
     *
     * @param string $ldapBaseDn
     *
     * @return self
     */
    public function setLdapBaseDn(string $ldapBaseDn) : self
    {
        $this->ldapBaseDn = $ldapBaseDn;
        return $this;
    }
    /**
     * The serach filter of ldap service.
     *
     * @return string
     */
    public function getLdapFilter() : string
    {
        return $this->ldapFilter;
    }
    /**
     * The serach filter of ldap service.
     *
     * @param string $ldapFilter
     *
     * @return self
     */
    public function setLdapFilter(string $ldapFilter) : self
    {
        $this->ldapFilter = $ldapFilter;
        return $this;
    }
}