<?php

namespace Gyroscops\Harbor\Api\Model;

class ConfigurationsResponse
{
    /**
     *
     *
     * @var BoolConfigItem|null
     */
    protected $oidcVerifyCert;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $emailIdentity;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $ldapGroupSearchFilter;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $authMode;
    /**
     *
     *
     * @var BoolConfigItem|null
     */
    protected $selfRegistration;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $oidcScope;
    /**
     * The DN of the user to do the search.
     *
     * @var string|null
     */
    protected $ldapSearchDn;
    /**
     *
     *
     * @var IntegerConfigItem|null
     */
    protected $storagePerProject;
    /**
     *
     *
     * @var ConfigurationsResponseScanAllPolicy|null
     */
    protected $scanAllPolicy;
    /**
     *
     *
     * @var BoolConfigItem|null
     */
    protected $verifyRemoteCert;
    /**
     *
     *
     * @var IntegerConfigItem|null
     */
    protected $ldapTimeout;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $ldapBaseDn;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $ldapFilter;
    /**
     *
     *
     * @var BoolConfigItem|null
     */
    protected $readOnly;
    /**
     *
     *
     * @var BoolConfigItem|null
     */
    protected $quotaPerProjectEnable;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $ldapUrl;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $oidcName;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $projectCreationRestriction;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $ldapUid;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $oidcClientId;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $ldapGroupBaseDn;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $ldapGroupAttributeName;
    /**
     *
     *
     * @var BoolConfigItem|null
     */
    protected $emailInsecure;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $ldapGroupAdminDn;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $emailUsername;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $oidcEndpoint;
    /**
     * 0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE
     *
     * @var int|null
     */
    protected $ldapScope;
    /**
     *
     *
     * @var IntegerConfigItem|null
     */
    protected $countPerProject;
    /**
     *
     *
     * @var IntegerConfigItem|null
     */
    protected $tokenExpiration;
    /**
     *
     *
     * @var IntegerConfigItem|null
     */
    protected $ldapGroupSearchScope;
    /**
     *
     *
     * @var BoolConfigItem|null
     */
    protected $emailSsl;
    /**
     *
     *
     * @var IntegerConfigItem|null
     */
    protected $emailPort;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $emailHost;
    /**
     *
     *
     * @var StringConfigItem|null
     */
    protected $emailFrom;
    /**
     *
     *
     * @return BoolConfigItem|null
     */
    public function getOidcVerifyCert(): ?BoolConfigItem
    {
        return $this->oidcVerifyCert;
    }
    /**
     *
     *
     * @param BoolConfigItem|null $oidcVerifyCert
     *
     * @return self
     */
    public function setOidcVerifyCert(?BoolConfigItem $oidcVerifyCert): self
    {
        $this->oidcVerifyCert = $oidcVerifyCert;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getEmailIdentity(): ?StringConfigItem
    {
        return $this->emailIdentity;
    }
    /**
     *
     *
     * @param StringConfigItem|null $emailIdentity
     *
     * @return self
     */
    public function setEmailIdentity(?StringConfigItem $emailIdentity): self
    {
        $this->emailIdentity = $emailIdentity;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getLdapGroupSearchFilter(): ?StringConfigItem
    {
        return $this->ldapGroupSearchFilter;
    }
    /**
     *
     *
     * @param StringConfigItem|null $ldapGroupSearchFilter
     *
     * @return self
     */
    public function setLdapGroupSearchFilter(?StringConfigItem $ldapGroupSearchFilter): self
    {
        $this->ldapGroupSearchFilter = $ldapGroupSearchFilter;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getAuthMode(): ?StringConfigItem
    {
        return $this->authMode;
    }
    /**
     *
     *
     * @param StringConfigItem|null $authMode
     *
     * @return self
     */
    public function setAuthMode(?StringConfigItem $authMode): self
    {
        $this->authMode = $authMode;
        return $this;
    }
    /**
     *
     *
     * @return BoolConfigItem|null
     */
    public function getSelfRegistration(): ?BoolConfigItem
    {
        return $this->selfRegistration;
    }
    /**
     *
     *
     * @param BoolConfigItem|null $selfRegistration
     *
     * @return self
     */
    public function setSelfRegistration(?BoolConfigItem $selfRegistration): self
    {
        $this->selfRegistration = $selfRegistration;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getOidcScope(): ?StringConfigItem
    {
        return $this->oidcScope;
    }
    /**
     *
     *
     * @param StringConfigItem|null $oidcScope
     *
     * @return self
     */
    public function setOidcScope(?StringConfigItem $oidcScope): self
    {
        $this->oidcScope = $oidcScope;
        return $this;
    }
    /**
     * The DN of the user to do the search.
     *
     * @return string|null
     */
    public function getLdapSearchDn(): ?string
    {
        return $this->ldapSearchDn;
    }
    /**
     * The DN of the user to do the search.
     *
     * @param string|null $ldapSearchDn
     *
     * @return self
     */
    public function setLdapSearchDn(?string $ldapSearchDn): self
    {
        $this->ldapSearchDn = $ldapSearchDn;
        return $this;
    }
    /**
     *
     *
     * @return IntegerConfigItem|null
     */
    public function getStoragePerProject(): ?IntegerConfigItem
    {
        return $this->storagePerProject;
    }
    /**
     *
     *
     * @param IntegerConfigItem|null $storagePerProject
     *
     * @return self
     */
    public function setStoragePerProject(?IntegerConfigItem $storagePerProject): self
    {
        $this->storagePerProject = $storagePerProject;
        return $this;
    }
    /**
     *
     *
     * @return ConfigurationsResponseScanAllPolicy|null
     */
    public function getScanAllPolicy(): ?ConfigurationsResponseScanAllPolicy
    {
        return $this->scanAllPolicy;
    }
    /**
     *
     *
     * @param ConfigurationsResponseScanAllPolicy|null $scanAllPolicy
     *
     * @return self
     */
    public function setScanAllPolicy(?ConfigurationsResponseScanAllPolicy $scanAllPolicy): self
    {
        $this->scanAllPolicy = $scanAllPolicy;
        return $this;
    }
    /**
     *
     *
     * @return BoolConfigItem|null
     */
    public function getVerifyRemoteCert(): ?BoolConfigItem
    {
        return $this->verifyRemoteCert;
    }
    /**
     *
     *
     * @param BoolConfigItem|null $verifyRemoteCert
     *
     * @return self
     */
    public function setVerifyRemoteCert(?BoolConfigItem $verifyRemoteCert): self
    {
        $this->verifyRemoteCert = $verifyRemoteCert;
        return $this;
    }
    /**
     *
     *
     * @return IntegerConfigItem|null
     */
    public function getLdapTimeout(): ?IntegerConfigItem
    {
        return $this->ldapTimeout;
    }
    /**
     *
     *
     * @param IntegerConfigItem|null $ldapTimeout
     *
     * @return self
     */
    public function setLdapTimeout(?IntegerConfigItem $ldapTimeout): self
    {
        $this->ldapTimeout = $ldapTimeout;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getLdapBaseDn(): ?StringConfigItem
    {
        return $this->ldapBaseDn;
    }
    /**
     *
     *
     * @param StringConfigItem|null $ldapBaseDn
     *
     * @return self
     */
    public function setLdapBaseDn(?StringConfigItem $ldapBaseDn): self
    {
        $this->ldapBaseDn = $ldapBaseDn;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getLdapFilter(): ?StringConfigItem
    {
        return $this->ldapFilter;
    }
    /**
     *
     *
     * @param StringConfigItem|null $ldapFilter
     *
     * @return self
     */
    public function setLdapFilter(?StringConfigItem $ldapFilter): self
    {
        $this->ldapFilter = $ldapFilter;
        return $this;
    }
    /**
     *
     *
     * @return BoolConfigItem|null
     */
    public function getReadOnly(): ?BoolConfigItem
    {
        return $this->readOnly;
    }
    /**
     *
     *
     * @param BoolConfigItem|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?BoolConfigItem $readOnly): self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     *
     *
     * @return BoolConfigItem|null
     */
    public function getQuotaPerProjectEnable(): ?BoolConfigItem
    {
        return $this->quotaPerProjectEnable;
    }
    /**
     *
     *
     * @param BoolConfigItem|null $quotaPerProjectEnable
     *
     * @return self
     */
    public function setQuotaPerProjectEnable(?BoolConfigItem $quotaPerProjectEnable): self
    {
        $this->quotaPerProjectEnable = $quotaPerProjectEnable;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getLdapUrl(): ?StringConfigItem
    {
        return $this->ldapUrl;
    }
    /**
     *
     *
     * @param StringConfigItem|null $ldapUrl
     *
     * @return self
     */
    public function setLdapUrl(?StringConfigItem $ldapUrl): self
    {
        $this->ldapUrl = $ldapUrl;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getOidcName(): ?StringConfigItem
    {
        return $this->oidcName;
    }
    /**
     *
     *
     * @param StringConfigItem|null $oidcName
     *
     * @return self
     */
    public function setOidcName(?StringConfigItem $oidcName): self
    {
        $this->oidcName = $oidcName;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getProjectCreationRestriction(): ?StringConfigItem
    {
        return $this->projectCreationRestriction;
    }
    /**
     *
     *
     * @param StringConfigItem|null $projectCreationRestriction
     *
     * @return self
     */
    public function setProjectCreationRestriction(?StringConfigItem $projectCreationRestriction): self
    {
        $this->projectCreationRestriction = $projectCreationRestriction;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getLdapUid(): ?StringConfigItem
    {
        return $this->ldapUid;
    }
    /**
     *
     *
     * @param StringConfigItem|null $ldapUid
     *
     * @return self
     */
    public function setLdapUid(?StringConfigItem $ldapUid): self
    {
        $this->ldapUid = $ldapUid;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getOidcClientId(): ?StringConfigItem
    {
        return $this->oidcClientId;
    }
    /**
     *
     *
     * @param StringConfigItem|null $oidcClientId
     *
     * @return self
     */
    public function setOidcClientId(?StringConfigItem $oidcClientId): self
    {
        $this->oidcClientId = $oidcClientId;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getLdapGroupBaseDn(): ?StringConfigItem
    {
        return $this->ldapGroupBaseDn;
    }
    /**
     *
     *
     * @param StringConfigItem|null $ldapGroupBaseDn
     *
     * @return self
     */
    public function setLdapGroupBaseDn(?StringConfigItem $ldapGroupBaseDn): self
    {
        $this->ldapGroupBaseDn = $ldapGroupBaseDn;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getLdapGroupAttributeName(): ?StringConfigItem
    {
        return $this->ldapGroupAttributeName;
    }
    /**
     *
     *
     * @param StringConfigItem|null $ldapGroupAttributeName
     *
     * @return self
     */
    public function setLdapGroupAttributeName(?StringConfigItem $ldapGroupAttributeName): self
    {
        $this->ldapGroupAttributeName = $ldapGroupAttributeName;
        return $this;
    }
    /**
     *
     *
     * @return BoolConfigItem|null
     */
    public function getEmailInsecure(): ?BoolConfigItem
    {
        return $this->emailInsecure;
    }
    /**
     *
     *
     * @param BoolConfigItem|null $emailInsecure
     *
     * @return self
     */
    public function setEmailInsecure(?BoolConfigItem $emailInsecure): self
    {
        $this->emailInsecure = $emailInsecure;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getLdapGroupAdminDn(): ?StringConfigItem
    {
        return $this->ldapGroupAdminDn;
    }
    /**
     *
     *
     * @param StringConfigItem|null $ldapGroupAdminDn
     *
     * @return self
     */
    public function setLdapGroupAdminDn(?StringConfigItem $ldapGroupAdminDn): self
    {
        $this->ldapGroupAdminDn = $ldapGroupAdminDn;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getEmailUsername(): ?StringConfigItem
    {
        return $this->emailUsername;
    }
    /**
     *
     *
     * @param StringConfigItem|null $emailUsername
     *
     * @return self
     */
    public function setEmailUsername(?StringConfigItem $emailUsername): self
    {
        $this->emailUsername = $emailUsername;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getOidcEndpoint(): ?StringConfigItem
    {
        return $this->oidcEndpoint;
    }
    /**
     *
     *
     * @param StringConfigItem|null $oidcEndpoint
     *
     * @return self
     */
    public function setOidcEndpoint(?StringConfigItem $oidcEndpoint): self
    {
        $this->oidcEndpoint = $oidcEndpoint;
        return $this;
    }
    /**
     * 0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE
     *
     * @return int|null
     */
    public function getLdapScope(): ?int
    {
        return $this->ldapScope;
    }
    /**
     * 0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE
     *
     * @param int|null $ldapScope
     *
     * @return self
     */
    public function setLdapScope(?int $ldapScope): self
    {
        $this->ldapScope = $ldapScope;
        return $this;
    }
    /**
     *
     *
     * @return IntegerConfigItem|null
     */
    public function getCountPerProject(): ?IntegerConfigItem
    {
        return $this->countPerProject;
    }
    /**
     *
     *
     * @param IntegerConfigItem|null $countPerProject
     *
     * @return self
     */
    public function setCountPerProject(?IntegerConfigItem $countPerProject): self
    {
        $this->countPerProject = $countPerProject;
        return $this;
    }
    /**
     *
     *
     * @return IntegerConfigItem|null
     */
    public function getTokenExpiration(): ?IntegerConfigItem
    {
        return $this->tokenExpiration;
    }
    /**
     *
     *
     * @param IntegerConfigItem|null $tokenExpiration
     *
     * @return self
     */
    public function setTokenExpiration(?IntegerConfigItem $tokenExpiration): self
    {
        $this->tokenExpiration = $tokenExpiration;
        return $this;
    }
    /**
     *
     *
     * @return IntegerConfigItem|null
     */
    public function getLdapGroupSearchScope(): ?IntegerConfigItem
    {
        return $this->ldapGroupSearchScope;
    }
    /**
     *
     *
     * @param IntegerConfigItem|null $ldapGroupSearchScope
     *
     * @return self
     */
    public function setLdapGroupSearchScope(?IntegerConfigItem $ldapGroupSearchScope): self
    {
        $this->ldapGroupSearchScope = $ldapGroupSearchScope;
        return $this;
    }
    /**
     *
     *
     * @return BoolConfigItem|null
     */
    public function getEmailSsl(): ?BoolConfigItem
    {
        return $this->emailSsl;
    }
    /**
     *
     *
     * @param BoolConfigItem|null $emailSsl
     *
     * @return self
     */
    public function setEmailSsl(?BoolConfigItem $emailSsl): self
    {
        $this->emailSsl = $emailSsl;
        return $this;
    }
    /**
     *
     *
     * @return IntegerConfigItem|null
     */
    public function getEmailPort(): ?IntegerConfigItem
    {
        return $this->emailPort;
    }
    /**
     *
     *
     * @param IntegerConfigItem|null $emailPort
     *
     * @return self
     */
    public function setEmailPort(?IntegerConfigItem $emailPort): self
    {
        $this->emailPort = $emailPort;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getEmailHost(): ?StringConfigItem
    {
        return $this->emailHost;
    }
    /**
     *
     *
     * @param StringConfigItem|null $emailHost
     *
     * @return self
     */
    public function setEmailHost(?StringConfigItem $emailHost): self
    {
        $this->emailHost = $emailHost;
        return $this;
    }
    /**
     *
     *
     * @return StringConfigItem|null
     */
    public function getEmailFrom(): ?StringConfigItem
    {
        return $this->emailFrom;
    }
    /**
     *
     *
     * @param StringConfigItem|null $emailFrom
     *
     * @return self
     */
    public function setEmailFrom(?StringConfigItem $emailFrom): self
    {
        $this->emailFrom = $emailFrom;
        return $this;
    }
}
