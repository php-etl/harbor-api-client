<?php

namespace Gyroscops\Harbor\Api\Model;

class LdapConf
{
    /**
     * The url of ldap service.
     *
     * @var string|null
     */
    protected $ldapUrl;
    /**
     * The search dn of ldap service.
     *
     * @var string|null
     */
    protected $ldapSearchDn;
    /**
     * The search password of ldap service.
     *
     * @var string|null
     */
    protected $ldapSearchPassword;
    /**
     * The base dn of ldap service.
     *
     * @var string|null
     */
    protected $ldapBaseDn;
    /**
     * The serach filter of ldap service.
     *
     * @var string|null
     */
    protected $ldapFilter;
    /**
     * The serach uid from ldap service attributes.
     *
     * @var string|null
     */
    protected $ldapUid;
    /**
     * The serach scope of ldap service.
     *
     * @var int|null
     */
    protected $ldapScope;
    /**
     * The connect timeout of ldap service(second).
     *
     * @var int|null
     */
    protected $ldapConnectionTimeout;
    /**
     * Verify Ldap server certificate.
     *
     * @var bool|null
     */
    protected $ldapVerifyCert;
    /**
     * The url of ldap service.
     *
     * @return string|null
     */
    public function getLdapUrl() : ?string
    {
        return $this->ldapUrl;
    }
    /**
     * The url of ldap service.
     *
     * @param string|null $ldapUrl
     *
     * @return self
     */
    public function setLdapUrl(?string $ldapUrl) : self
    {
        $this->ldapUrl = $ldapUrl;
        return $this;
    }
    /**
     * The search dn of ldap service.
     *
     * @return string|null
     */
    public function getLdapSearchDn() : ?string
    {
        return $this->ldapSearchDn;
    }
    /**
     * The search dn of ldap service.
     *
     * @param string|null $ldapSearchDn
     *
     * @return self
     */
    public function setLdapSearchDn(?string $ldapSearchDn) : self
    {
        $this->ldapSearchDn = $ldapSearchDn;
        return $this;
    }
    /**
     * The search password of ldap service.
     *
     * @return string|null
     */
    public function getLdapSearchPassword() : ?string
    {
        return $this->ldapSearchPassword;
    }
    /**
     * The search password of ldap service.
     *
     * @param string|null $ldapSearchPassword
     *
     * @return self
     */
    public function setLdapSearchPassword(?string $ldapSearchPassword) : self
    {
        $this->ldapSearchPassword = $ldapSearchPassword;
        return $this;
    }
    /**
     * The base dn of ldap service.
     *
     * @return string|null
     */
    public function getLdapBaseDn() : ?string
    {
        return $this->ldapBaseDn;
    }
    /**
     * The base dn of ldap service.
     *
     * @param string|null $ldapBaseDn
     *
     * @return self
     */
    public function setLdapBaseDn(?string $ldapBaseDn) : self
    {
        $this->ldapBaseDn = $ldapBaseDn;
        return $this;
    }
    /**
     * The serach filter of ldap service.
     *
     * @return string|null
     */
    public function getLdapFilter() : ?string
    {
        return $this->ldapFilter;
    }
    /**
     * The serach filter of ldap service.
     *
     * @param string|null $ldapFilter
     *
     * @return self
     */
    public function setLdapFilter(?string $ldapFilter) : self
    {
        $this->ldapFilter = $ldapFilter;
        return $this;
    }
    /**
     * The serach uid from ldap service attributes.
     *
     * @return string|null
     */
    public function getLdapUid() : ?string
    {
        return $this->ldapUid;
    }
    /**
     * The serach uid from ldap service attributes.
     *
     * @param string|null $ldapUid
     *
     * @return self
     */
    public function setLdapUid(?string $ldapUid) : self
    {
        $this->ldapUid = $ldapUid;
        return $this;
    }
    /**
     * The serach scope of ldap service.
     *
     * @return int|null
     */
    public function getLdapScope() : ?int
    {
        return $this->ldapScope;
    }
    /**
     * The serach scope of ldap service.
     *
     * @param int|null $ldapScope
     *
     * @return self
     */
    public function setLdapScope(?int $ldapScope) : self
    {
        $this->ldapScope = $ldapScope;
        return $this;
    }
    /**
     * The connect timeout of ldap service(second).
     *
     * @return int|null
     */
    public function getLdapConnectionTimeout() : ?int
    {
        return $this->ldapConnectionTimeout;
    }
    /**
     * The connect timeout of ldap service(second).
     *
     * @param int|null $ldapConnectionTimeout
     *
     * @return self
     */
    public function setLdapConnectionTimeout(?int $ldapConnectionTimeout) : self
    {
        $this->ldapConnectionTimeout = $ldapConnectionTimeout;
        return $this;
    }
    /**
     * Verify Ldap server certificate.
     *
     * @return bool|null
     */
    public function getLdapVerifyCert() : ?bool
    {
        return $this->ldapVerifyCert;
    }
    /**
     * Verify Ldap server certificate.
     *
     * @param bool|null $ldapVerifyCert
     *
     * @return self
     */
    public function setLdapVerifyCert(?bool $ldapVerifyCert) : self
    {
        $this->ldapVerifyCert = $ldapVerifyCert;
        return $this;
    }
}