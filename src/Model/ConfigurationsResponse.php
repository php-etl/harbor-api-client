<?php

namespace Gyroscops\Harbor\Api\Model;

class ConfigurationsResponse
{
    /**
     * 
     *
     * @var BoolConfigItem
     */
    protected $oidcVerifyCert;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $emailIdentity;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $ldapGroupSearchFilter;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $authMode;
    /**
     * 
     *
     * @var BoolConfigItem
     */
    protected $selfRegistration;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $oidcScope;
    /**
     * The DN of the user to do the search.
     *
     * @var string
     */
    protected $ldapSearchDn;
    /**
     * 
     *
     * @var IntegerConfigItem
     */
    protected $storagePerProject;
    /**
     * 
     *
     * @var ConfigurationsResponseScanAllPolicy
     */
    protected $scanAllPolicy;
    /**
     * 
     *
     * @var BoolConfigItem
     */
    protected $verifyRemoteCert;
    /**
     * 
     *
     * @var IntegerConfigItem
     */
    protected $ldapTimeout;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $ldapBaseDn;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $ldapFilter;
    /**
     * 
     *
     * @var BoolConfigItem
     */
    protected $readOnly;
    /**
     * 
     *
     * @var BoolConfigItem
     */
    protected $quotaPerProjectEnable;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $ldapUrl;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $oidcName;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $projectCreationRestriction;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $ldapUid;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $oidcClientId;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $ldapGroupBaseDn;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $ldapGroupAttributeName;
    /**
     * 
     *
     * @var BoolConfigItem
     */
    protected $emailInsecure;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $ldapGroupAdminDn;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $emailUsername;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $oidcEndpoint;
    /**
     * 0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE
     *
     * @var int
     */
    protected $ldapScope;
    /**
     * 
     *
     * @var IntegerConfigItem
     */
    protected $countPerProject;
    /**
     * 
     *
     * @var IntegerConfigItem
     */
    protected $tokenExpiration;
    /**
     * 
     *
     * @var IntegerConfigItem
     */
    protected $ldapGroupSearchScope;
    /**
     * 
     *
     * @var BoolConfigItem
     */
    protected $emailSsl;
    /**
     * 
     *
     * @var IntegerConfigItem
     */
    protected $emailPort;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $emailHost;
    /**
     * 
     *
     * @var StringConfigItem
     */
    protected $emailFrom;
    /**
     * 
     *
     * @return BoolConfigItem
     */
    public function getOidcVerifyCert() : BoolConfigItem
    {
        return $this->oidcVerifyCert;
    }
    /**
     * 
     *
     * @param BoolConfigItem $oidcVerifyCert
     *
     * @return self
     */
    public function setOidcVerifyCert(BoolConfigItem $oidcVerifyCert) : self
    {
        $this->oidcVerifyCert = $oidcVerifyCert;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getEmailIdentity() : StringConfigItem
    {
        return $this->emailIdentity;
    }
    /**
     * 
     *
     * @param StringConfigItem $emailIdentity
     *
     * @return self
     */
    public function setEmailIdentity(StringConfigItem $emailIdentity) : self
    {
        $this->emailIdentity = $emailIdentity;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getLdapGroupSearchFilter() : StringConfigItem
    {
        return $this->ldapGroupSearchFilter;
    }
    /**
     * 
     *
     * @param StringConfigItem $ldapGroupSearchFilter
     *
     * @return self
     */
    public function setLdapGroupSearchFilter(StringConfigItem $ldapGroupSearchFilter) : self
    {
        $this->ldapGroupSearchFilter = $ldapGroupSearchFilter;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getAuthMode() : StringConfigItem
    {
        return $this->authMode;
    }
    /**
     * 
     *
     * @param StringConfigItem $authMode
     *
     * @return self
     */
    public function setAuthMode(StringConfigItem $authMode) : self
    {
        $this->authMode = $authMode;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem
     */
    public function getSelfRegistration() : BoolConfigItem
    {
        return $this->selfRegistration;
    }
    /**
     * 
     *
     * @param BoolConfigItem $selfRegistration
     *
     * @return self
     */
    public function setSelfRegistration(BoolConfigItem $selfRegistration) : self
    {
        $this->selfRegistration = $selfRegistration;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getOidcScope() : StringConfigItem
    {
        return $this->oidcScope;
    }
    /**
     * 
     *
     * @param StringConfigItem $oidcScope
     *
     * @return self
     */
    public function setOidcScope(StringConfigItem $oidcScope) : self
    {
        $this->oidcScope = $oidcScope;
        return $this;
    }
    /**
     * The DN of the user to do the search.
     *
     * @return string
     */
    public function getLdapSearchDn() : string
    {
        return $this->ldapSearchDn;
    }
    /**
     * The DN of the user to do the search.
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
     * 
     *
     * @return IntegerConfigItem
     */
    public function getStoragePerProject() : IntegerConfigItem
    {
        return $this->storagePerProject;
    }
    /**
     * 
     *
     * @param IntegerConfigItem $storagePerProject
     *
     * @return self
     */
    public function setStoragePerProject(IntegerConfigItem $storagePerProject) : self
    {
        $this->storagePerProject = $storagePerProject;
        return $this;
    }
    /**
     * 
     *
     * @return ConfigurationsResponseScanAllPolicy
     */
    public function getScanAllPolicy() : ConfigurationsResponseScanAllPolicy
    {
        return $this->scanAllPolicy;
    }
    /**
     * 
     *
     * @param ConfigurationsResponseScanAllPolicy $scanAllPolicy
     *
     * @return self
     */
    public function setScanAllPolicy(ConfigurationsResponseScanAllPolicy $scanAllPolicy) : self
    {
        $this->scanAllPolicy = $scanAllPolicy;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem
     */
    public function getVerifyRemoteCert() : BoolConfigItem
    {
        return $this->verifyRemoteCert;
    }
    /**
     * 
     *
     * @param BoolConfigItem $verifyRemoteCert
     *
     * @return self
     */
    public function setVerifyRemoteCert(BoolConfigItem $verifyRemoteCert) : self
    {
        $this->verifyRemoteCert = $verifyRemoteCert;
        return $this;
    }
    /**
     * 
     *
     * @return IntegerConfigItem
     */
    public function getLdapTimeout() : IntegerConfigItem
    {
        return $this->ldapTimeout;
    }
    /**
     * 
     *
     * @param IntegerConfigItem $ldapTimeout
     *
     * @return self
     */
    public function setLdapTimeout(IntegerConfigItem $ldapTimeout) : self
    {
        $this->ldapTimeout = $ldapTimeout;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getLdapBaseDn() : StringConfigItem
    {
        return $this->ldapBaseDn;
    }
    /**
     * 
     *
     * @param StringConfigItem $ldapBaseDn
     *
     * @return self
     */
    public function setLdapBaseDn(StringConfigItem $ldapBaseDn) : self
    {
        $this->ldapBaseDn = $ldapBaseDn;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getLdapFilter() : StringConfigItem
    {
        return $this->ldapFilter;
    }
    /**
     * 
     *
     * @param StringConfigItem $ldapFilter
     *
     * @return self
     */
    public function setLdapFilter(StringConfigItem $ldapFilter) : self
    {
        $this->ldapFilter = $ldapFilter;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem
     */
    public function getReadOnly() : BoolConfigItem
    {
        return $this->readOnly;
    }
    /**
     * 
     *
     * @param BoolConfigItem $readOnly
     *
     * @return self
     */
    public function setReadOnly(BoolConfigItem $readOnly) : self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem
     */
    public function getQuotaPerProjectEnable() : BoolConfigItem
    {
        return $this->quotaPerProjectEnable;
    }
    /**
     * 
     *
     * @param BoolConfigItem $quotaPerProjectEnable
     *
     * @return self
     */
    public function setQuotaPerProjectEnable(BoolConfigItem $quotaPerProjectEnable) : self
    {
        $this->quotaPerProjectEnable = $quotaPerProjectEnable;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getLdapUrl() : StringConfigItem
    {
        return $this->ldapUrl;
    }
    /**
     * 
     *
     * @param StringConfigItem $ldapUrl
     *
     * @return self
     */
    public function setLdapUrl(StringConfigItem $ldapUrl) : self
    {
        $this->ldapUrl = $ldapUrl;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getOidcName() : StringConfigItem
    {
        return $this->oidcName;
    }
    /**
     * 
     *
     * @param StringConfigItem $oidcName
     *
     * @return self
     */
    public function setOidcName(StringConfigItem $oidcName) : self
    {
        $this->oidcName = $oidcName;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getProjectCreationRestriction() : StringConfigItem
    {
        return $this->projectCreationRestriction;
    }
    /**
     * 
     *
     * @param StringConfigItem $projectCreationRestriction
     *
     * @return self
     */
    public function setProjectCreationRestriction(StringConfigItem $projectCreationRestriction) : self
    {
        $this->projectCreationRestriction = $projectCreationRestriction;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getLdapUid() : StringConfigItem
    {
        return $this->ldapUid;
    }
    /**
     * 
     *
     * @param StringConfigItem $ldapUid
     *
     * @return self
     */
    public function setLdapUid(StringConfigItem $ldapUid) : self
    {
        $this->ldapUid = $ldapUid;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getOidcClientId() : StringConfigItem
    {
        return $this->oidcClientId;
    }
    /**
     * 
     *
     * @param StringConfigItem $oidcClientId
     *
     * @return self
     */
    public function setOidcClientId(StringConfigItem $oidcClientId) : self
    {
        $this->oidcClientId = $oidcClientId;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getLdapGroupBaseDn() : StringConfigItem
    {
        return $this->ldapGroupBaseDn;
    }
    /**
     * 
     *
     * @param StringConfigItem $ldapGroupBaseDn
     *
     * @return self
     */
    public function setLdapGroupBaseDn(StringConfigItem $ldapGroupBaseDn) : self
    {
        $this->ldapGroupBaseDn = $ldapGroupBaseDn;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getLdapGroupAttributeName() : StringConfigItem
    {
        return $this->ldapGroupAttributeName;
    }
    /**
     * 
     *
     * @param StringConfigItem $ldapGroupAttributeName
     *
     * @return self
     */
    public function setLdapGroupAttributeName(StringConfigItem $ldapGroupAttributeName) : self
    {
        $this->ldapGroupAttributeName = $ldapGroupAttributeName;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem
     */
    public function getEmailInsecure() : BoolConfigItem
    {
        return $this->emailInsecure;
    }
    /**
     * 
     *
     * @param BoolConfigItem $emailInsecure
     *
     * @return self
     */
    public function setEmailInsecure(BoolConfigItem $emailInsecure) : self
    {
        $this->emailInsecure = $emailInsecure;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getLdapGroupAdminDn() : StringConfigItem
    {
        return $this->ldapGroupAdminDn;
    }
    /**
     * 
     *
     * @param StringConfigItem $ldapGroupAdminDn
     *
     * @return self
     */
    public function setLdapGroupAdminDn(StringConfigItem $ldapGroupAdminDn) : self
    {
        $this->ldapGroupAdminDn = $ldapGroupAdminDn;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getEmailUsername() : StringConfigItem
    {
        return $this->emailUsername;
    }
    /**
     * 
     *
     * @param StringConfigItem $emailUsername
     *
     * @return self
     */
    public function setEmailUsername(StringConfigItem $emailUsername) : self
    {
        $this->emailUsername = $emailUsername;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getOidcEndpoint() : StringConfigItem
    {
        return $this->oidcEndpoint;
    }
    /**
     * 
     *
     * @param StringConfigItem $oidcEndpoint
     *
     * @return self
     */
    public function setOidcEndpoint(StringConfigItem $oidcEndpoint) : self
    {
        $this->oidcEndpoint = $oidcEndpoint;
        return $this;
    }
    /**
     * 0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE
     *
     * @return int
     */
    public function getLdapScope() : int
    {
        return $this->ldapScope;
    }
    /**
     * 0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE
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
     * 
     *
     * @return IntegerConfigItem
     */
    public function getCountPerProject() : IntegerConfigItem
    {
        return $this->countPerProject;
    }
    /**
     * 
     *
     * @param IntegerConfigItem $countPerProject
     *
     * @return self
     */
    public function setCountPerProject(IntegerConfigItem $countPerProject) : self
    {
        $this->countPerProject = $countPerProject;
        return $this;
    }
    /**
     * 
     *
     * @return IntegerConfigItem
     */
    public function getTokenExpiration() : IntegerConfigItem
    {
        return $this->tokenExpiration;
    }
    /**
     * 
     *
     * @param IntegerConfigItem $tokenExpiration
     *
     * @return self
     */
    public function setTokenExpiration(IntegerConfigItem $tokenExpiration) : self
    {
        $this->tokenExpiration = $tokenExpiration;
        return $this;
    }
    /**
     * 
     *
     * @return IntegerConfigItem
     */
    public function getLdapGroupSearchScope() : IntegerConfigItem
    {
        return $this->ldapGroupSearchScope;
    }
    /**
     * 
     *
     * @param IntegerConfigItem $ldapGroupSearchScope
     *
     * @return self
     */
    public function setLdapGroupSearchScope(IntegerConfigItem $ldapGroupSearchScope) : self
    {
        $this->ldapGroupSearchScope = $ldapGroupSearchScope;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem
     */
    public function getEmailSsl() : BoolConfigItem
    {
        return $this->emailSsl;
    }
    /**
     * 
     *
     * @param BoolConfigItem $emailSsl
     *
     * @return self
     */
    public function setEmailSsl(BoolConfigItem $emailSsl) : self
    {
        $this->emailSsl = $emailSsl;
        return $this;
    }
    /**
     * 
     *
     * @return IntegerConfigItem
     */
    public function getEmailPort() : IntegerConfigItem
    {
        return $this->emailPort;
    }
    /**
     * 
     *
     * @param IntegerConfigItem $emailPort
     *
     * @return self
     */
    public function setEmailPort(IntegerConfigItem $emailPort) : self
    {
        $this->emailPort = $emailPort;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getEmailHost() : StringConfigItem
    {
        return $this->emailHost;
    }
    /**
     * 
     *
     * @param StringConfigItem $emailHost
     *
     * @return self
     */
    public function setEmailHost(StringConfigItem $emailHost) : self
    {
        $this->emailHost = $emailHost;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem
     */
    public function getEmailFrom() : StringConfigItem
    {
        return $this->emailFrom;
    }
    /**
     * 
     *
     * @param StringConfigItem $emailFrom
     *
     * @return self
     */
    public function setEmailFrom(StringConfigItem $emailFrom) : self
    {
        $this->emailFrom = $emailFrom;
        return $this;
    }
}