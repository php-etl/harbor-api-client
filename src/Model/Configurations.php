<?php

namespace Gyroscops\Harbor\Api\Model;

class Configurations
{
    /**
     * Whether verify your OIDC server certificate, disable it if your OIDC server is hosted via self-hosted certificate.
     *
     * @var bool|null
     */
    protected $oidcVerifyCert;
    /**
     * By default it's empty so the email_username is picked.
     *
     * @var string|null
     */
    protected $emailIdentity;
    /**
     * The filter to search the ldap group.
     *
     * @var string|null
     */
    protected $ldapGroupSearchFilter;
    /**
     * The auth mode of current system, such as "db_auth", "ldap_auth"
     *
     * @var string|null
     */
    protected $authMode;
    /**
     * Whether the Harbor instance supports self-registration.  If it's set to false, admin need to add user to the instance.
     *
     * @var bool|null
     */
    protected $selfRegistration;
    /**
     * The scope sent to OIDC server during authentication, should be separated by comma. It has to contain “openid”, and “offline_access”. If you are using google, please remove “offline_access” from this field.
     *
     * @var string|null
     */
    protected $oidcScope;
    /**
     * The DN of the user to do the search.
     *
     * @var string|null
     */
    protected $ldapSearchDn;
    /**
     * The default storage quota for the new created projects.
     *
     * @var string|null
     */
    protected $storagePerProject;
    /**
     *
     *
     * @var ConfigurationsScanAllPolicy|null
     */
    protected $scanAllPolicy;
    /**
     * Whether or not the certificate will be verified when Harbor tries to access a remote Harbor instance for replication.
     *
     * @var bool|null
     */
    protected $verifyRemoteCert;
    /**
     * timeout in seconds for connection to LDAP server.
     *
     * @var int|null
     */
    protected $ldapTimeout;
    /**
     * The Base DN for LDAP binding.
     *
     * @var string|null
     */
    protected $ldapBaseDn;
    /**
     * The filter for LDAP binding.
     *
     * @var string|null
     */
    protected $ldapFilter;
    /**
     * 'docker push' is prohibited by Harbor if you set it to true.
     *
     * @var bool|null
     */
    protected $readOnly;
    /**
     * This attribute indicates whether quota per project enabled in harbor
     *
     * @var bool|null
     */
    protected $quotaPerProjectEnable;
    /**
     * The URL of LDAP server.
     *
     * @var string|null
     */
    protected $ldapUrl;
    /**
     * The name of the OIDC provider.
     *
     * @var string|null
     */
    protected $oidcName;
    /**
     * This attribute restricts what users have the permission to create project.  It can be "everyone" or "adminonly".
     *
     * @var string|null
     */
    protected $projectCreationRestriction;
    /**
     * The attribute which is used as identity for the LDAP binding, such as "CN" or "SAMAccountname"
     *
     * @var string|null
     */
    protected $ldapUid;
    /**
     * The client id of the OIDC.
     *
     * @var string|null
     */
    protected $oidcClientId;
    /**
     * The base DN to search LDAP group.
     *
     * @var string|null
     */
    protected $ldapGroupBaseDn;
    /**
     * The attribute which is used as identity of the LDAP group, default is cn.
     *
     * @var string|null
     */
    protected $ldapGroupAttributeName;
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the email server.
     *
     * @var bool|null
     */
    protected $emailInsecure;
    /**
     * Specify the ldap group which have the same privilege with Harbor admin.
     *
     * @var string|null
     */
    protected $ldapGroupAdminDn;
    /**
     * The username for authenticate against SMTP server.
     *
     * @var string|null
     */
    protected $emailUsername;
    /**
     * The URL of an OIDC-complaint server, must start with 'https://'.
     *
     * @var string|null
     */
    protected $oidcEndpoint;
    /**
     * The client secret of the OIDC.
     *
     * @var string|null
     */
    protected $oidcClientSecret;
    /**
     * 0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE
     *
     * @var int|null
     */
    protected $ldapScope;
    /**
     * The default count quota for the new created projects.
     *
     * @var string|null
     */
    protected $countPerProject;
    /**
     * The expiration time of the token for internal Registry, in minutes.
     *
     * @var int|null
     */
    protected $tokenExpiration;
    /**
     * The scope to search ldap. '0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE'
     *
     * @var int|null
     */
    protected $ldapGroupSearchScope;
    /**
     * When it's set to true the system will access Email server via TLS by default.  If it's set to false, it still will handle "STARTTLS" from server side.
     *
     * @var bool|null
     */
    protected $emailSsl;
    /**
     * The port of SMTP server.
     *
     * @var int|null
     */
    protected $emailPort;
    /**
     * The hostname of SMTP server that sends Email notification.
     *
     * @var string|null
     */
    protected $emailHost;
    /**
     * The sender name for Email notification.
     *
     * @var string|null
     */
    protected $emailFrom;
    /**
     * Whether verify your OIDC server certificate, disable it if your OIDC server is hosted via self-hosted certificate.
     *
     * @return bool|null
     */
    public function getOidcVerifyCert(): ?bool
    {
        return $this->oidcVerifyCert;
    }
    /**
     * Whether verify your OIDC server certificate, disable it if your OIDC server is hosted via self-hosted certificate.
     *
     * @param bool|null $oidcVerifyCert
     *
     * @return self
     */
    public function setOidcVerifyCert(?bool $oidcVerifyCert): self
    {
        $this->oidcVerifyCert = $oidcVerifyCert;
        return $this;
    }
    /**
     * By default it's empty so the email_username is picked.
     *
     * @return string|null
     */
    public function getEmailIdentity(): ?string
    {
        return $this->emailIdentity;
    }
    /**
     * By default it's empty so the email_username is picked.
     *
     * @param string|null $emailIdentity
     *
     * @return self
     */
    public function setEmailIdentity(?string $emailIdentity): self
    {
        $this->emailIdentity = $emailIdentity;
        return $this;
    }
    /**
     * The filter to search the ldap group.
     *
     * @return string|null
     */
    public function getLdapGroupSearchFilter(): ?string
    {
        return $this->ldapGroupSearchFilter;
    }
    /**
     * The filter to search the ldap group.
     *
     * @param string|null $ldapGroupSearchFilter
     *
     * @return self
     */
    public function setLdapGroupSearchFilter(?string $ldapGroupSearchFilter): self
    {
        $this->ldapGroupSearchFilter = $ldapGroupSearchFilter;
        return $this;
    }
    /**
     * The auth mode of current system, such as "db_auth", "ldap_auth"
     *
     * @return string|null
     */
    public function getAuthMode(): ?string
    {
        return $this->authMode;
    }
    /**
     * The auth mode of current system, such as "db_auth", "ldap_auth"
     *
     * @param string|null $authMode
     *
     * @return self
     */
    public function setAuthMode(?string $authMode): self
    {
        $this->authMode = $authMode;
        return $this;
    }
    /**
     * Whether the Harbor instance supports self-registration.  If it's set to false, admin need to add user to the instance.
     *
     * @return bool|null
     */
    public function getSelfRegistration(): ?bool
    {
        return $this->selfRegistration;
    }
    /**
     * Whether the Harbor instance supports self-registration.  If it's set to false, admin need to add user to the instance.
     *
     * @param bool|null $selfRegistration
     *
     * @return self
     */
    public function setSelfRegistration(?bool $selfRegistration): self
    {
        $this->selfRegistration = $selfRegistration;
        return $this;
    }
    /**
     * The scope sent to OIDC server during authentication, should be separated by comma. It has to contain “openid”, and “offline_access”. If you are using google, please remove “offline_access” from this field.
     *
     * @return string|null
     */
    public function getOidcScope(): ?string
    {
        return $this->oidcScope;
    }
    /**
     * The scope sent to OIDC server during authentication, should be separated by comma. It has to contain “openid”, and “offline_access”. If you are using google, please remove “offline_access” from this field.
     *
     * @param string|null $oidcScope
     *
     * @return self
     */
    public function setOidcScope(?string $oidcScope): self
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
     * The default storage quota for the new created projects.
     *
     * @return string|null
     */
    public function getStoragePerProject(): ?string
    {
        return $this->storagePerProject;
    }
    /**
     * The default storage quota for the new created projects.
     *
     * @param string|null $storagePerProject
     *
     * @return self
     */
    public function setStoragePerProject(?string $storagePerProject): self
    {
        $this->storagePerProject = $storagePerProject;
        return $this;
    }
    /**
     *
     *
     * @return ConfigurationsScanAllPolicy|null
     */
    public function getScanAllPolicy(): ?ConfigurationsScanAllPolicy
    {
        return $this->scanAllPolicy;
    }
    /**
     *
     *
     * @param ConfigurationsScanAllPolicy|null $scanAllPolicy
     *
     * @return self
     */
    public function setScanAllPolicy(?ConfigurationsScanAllPolicy $scanAllPolicy): self
    {
        $this->scanAllPolicy = $scanAllPolicy;
        return $this;
    }
    /**
     * Whether or not the certificate will be verified when Harbor tries to access a remote Harbor instance for replication.
     *
     * @return bool|null
     */
    public function getVerifyRemoteCert(): ?bool
    {
        return $this->verifyRemoteCert;
    }
    /**
     * Whether or not the certificate will be verified when Harbor tries to access a remote Harbor instance for replication.
     *
     * @param bool|null $verifyRemoteCert
     *
     * @return self
     */
    public function setVerifyRemoteCert(?bool $verifyRemoteCert): self
    {
        $this->verifyRemoteCert = $verifyRemoteCert;
        return $this;
    }
    /**
     * timeout in seconds for connection to LDAP server.
     *
     * @return int|null
     */
    public function getLdapTimeout(): ?int
    {
        return $this->ldapTimeout;
    }
    /**
     * timeout in seconds for connection to LDAP server.
     *
     * @param int|null $ldapTimeout
     *
     * @return self
     */
    public function setLdapTimeout(?int $ldapTimeout): self
    {
        $this->ldapTimeout = $ldapTimeout;
        return $this;
    }
    /**
     * The Base DN for LDAP binding.
     *
     * @return string|null
     */
    public function getLdapBaseDn(): ?string
    {
        return $this->ldapBaseDn;
    }
    /**
     * The Base DN for LDAP binding.
     *
     * @param string|null $ldapBaseDn
     *
     * @return self
     */
    public function setLdapBaseDn(?string $ldapBaseDn): self
    {
        $this->ldapBaseDn = $ldapBaseDn;
        return $this;
    }
    /**
     * The filter for LDAP binding.
     *
     * @return string|null
     */
    public function getLdapFilter(): ?string
    {
        return $this->ldapFilter;
    }
    /**
     * The filter for LDAP binding.
     *
     * @param string|null $ldapFilter
     *
     * @return self
     */
    public function setLdapFilter(?string $ldapFilter): self
    {
        $this->ldapFilter = $ldapFilter;
        return $this;
    }
    /**
     * 'docker push' is prohibited by Harbor if you set it to true.
     *
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }
    /**
     * 'docker push' is prohibited by Harbor if you set it to true.
     *
     * @param bool|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * This attribute indicates whether quota per project enabled in harbor
     *
     * @return bool|null
     */
    public function getQuotaPerProjectEnable(): ?bool
    {
        return $this->quotaPerProjectEnable;
    }
    /**
     * This attribute indicates whether quota per project enabled in harbor
     *
     * @param bool|null $quotaPerProjectEnable
     *
     * @return self
     */
    public function setQuotaPerProjectEnable(?bool $quotaPerProjectEnable): self
    {
        $this->quotaPerProjectEnable = $quotaPerProjectEnable;
        return $this;
    }
    /**
     * The URL of LDAP server.
     *
     * @return string|null
     */
    public function getLdapUrl(): ?string
    {
        return $this->ldapUrl;
    }
    /**
     * The URL of LDAP server.
     *
     * @param string|null $ldapUrl
     *
     * @return self
     */
    public function setLdapUrl(?string $ldapUrl): self
    {
        $this->ldapUrl = $ldapUrl;
        return $this;
    }
    /**
     * The name of the OIDC provider.
     *
     * @return string|null
     */
    public function getOidcName(): ?string
    {
        return $this->oidcName;
    }
    /**
     * The name of the OIDC provider.
     *
     * @param string|null $oidcName
     *
     * @return self
     */
    public function setOidcName(?string $oidcName): self
    {
        $this->oidcName = $oidcName;
        return $this;
    }
    /**
     * This attribute restricts what users have the permission to create project.  It can be "everyone" or "adminonly".
     *
     * @return string|null
     */
    public function getProjectCreationRestriction(): ?string
    {
        return $this->projectCreationRestriction;
    }
    /**
     * This attribute restricts what users have the permission to create project.  It can be "everyone" or "adminonly".
     *
     * @param string|null $projectCreationRestriction
     *
     * @return self
     */
    public function setProjectCreationRestriction(?string $projectCreationRestriction): self
    {
        $this->projectCreationRestriction = $projectCreationRestriction;
        return $this;
    }
    /**
     * The attribute which is used as identity for the LDAP binding, such as "CN" or "SAMAccountname"
     *
     * @return string|null
     */
    public function getLdapUid(): ?string
    {
        return $this->ldapUid;
    }
    /**
     * The attribute which is used as identity for the LDAP binding, such as "CN" or "SAMAccountname"
     *
     * @param string|null $ldapUid
     *
     * @return self
     */
    public function setLdapUid(?string $ldapUid): self
    {
        $this->ldapUid = $ldapUid;
        return $this;
    }
    /**
     * The client id of the OIDC.
     *
     * @return string|null
     */
    public function getOidcClientId(): ?string
    {
        return $this->oidcClientId;
    }
    /**
     * The client id of the OIDC.
     *
     * @param string|null $oidcClientId
     *
     * @return self
     */
    public function setOidcClientId(?string $oidcClientId): self
    {
        $this->oidcClientId = $oidcClientId;
        return $this;
    }
    /**
     * The base DN to search LDAP group.
     *
     * @return string|null
     */
    public function getLdapGroupBaseDn(): ?string
    {
        return $this->ldapGroupBaseDn;
    }
    /**
     * The base DN to search LDAP group.
     *
     * @param string|null $ldapGroupBaseDn
     *
     * @return self
     */
    public function setLdapGroupBaseDn(?string $ldapGroupBaseDn): self
    {
        $this->ldapGroupBaseDn = $ldapGroupBaseDn;
        return $this;
    }
    /**
     * The attribute which is used as identity of the LDAP group, default is cn.
     *
     * @return string|null
     */
    public function getLdapGroupAttributeName(): ?string
    {
        return $this->ldapGroupAttributeName;
    }
    /**
     * The attribute which is used as identity of the LDAP group, default is cn.
     *
     * @param string|null $ldapGroupAttributeName
     *
     * @return self
     */
    public function setLdapGroupAttributeName(?string $ldapGroupAttributeName): self
    {
        $this->ldapGroupAttributeName = $ldapGroupAttributeName;
        return $this;
    }
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the email server.
     *
     * @return bool|null
     */
    public function getEmailInsecure(): ?bool
    {
        return $this->emailInsecure;
    }
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the email server.
     *
     * @param bool|null $emailInsecure
     *
     * @return self
     */
    public function setEmailInsecure(?bool $emailInsecure): self
    {
        $this->emailInsecure = $emailInsecure;
        return $this;
    }
    /**
     * Specify the ldap group which have the same privilege with Harbor admin.
     *
     * @return string|null
     */
    public function getLdapGroupAdminDn(): ?string
    {
        return $this->ldapGroupAdminDn;
    }
    /**
     * Specify the ldap group which have the same privilege with Harbor admin.
     *
     * @param string|null $ldapGroupAdminDn
     *
     * @return self
     */
    public function setLdapGroupAdminDn(?string $ldapGroupAdminDn): self
    {
        $this->ldapGroupAdminDn = $ldapGroupAdminDn;
        return $this;
    }
    /**
     * The username for authenticate against SMTP server.
     *
     * @return string|null
     */
    public function getEmailUsername(): ?string
    {
        return $this->emailUsername;
    }
    /**
     * The username for authenticate against SMTP server.
     *
     * @param string|null $emailUsername
     *
     * @return self
     */
    public function setEmailUsername(?string $emailUsername): self
    {
        $this->emailUsername = $emailUsername;
        return $this;
    }
    /**
     * The URL of an OIDC-complaint server, must start with 'https://'.
     *
     * @return string|null
     */
    public function getOidcEndpoint(): ?string
    {
        return $this->oidcEndpoint;
    }
    /**
     * The URL of an OIDC-complaint server, must start with 'https://'.
     *
     * @param string|null $oidcEndpoint
     *
     * @return self
     */
    public function setOidcEndpoint(?string $oidcEndpoint): self
    {
        $this->oidcEndpoint = $oidcEndpoint;
        return $this;
    }
    /**
     * The client secret of the OIDC.
     *
     * @return string|null
     */
    public function getOidcClientSecret(): ?string
    {
        return $this->oidcClientSecret;
    }
    /**
     * The client secret of the OIDC.
     *
     * @param string|null $oidcClientSecret
     *
     * @return self
     */
    public function setOidcClientSecret(?string $oidcClientSecret): self
    {
        $this->oidcClientSecret = $oidcClientSecret;
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
     * The default count quota for the new created projects.
     *
     * @return string|null
     */
    public function getCountPerProject(): ?string
    {
        return $this->countPerProject;
    }
    /**
     * The default count quota for the new created projects.
     *
     * @param string|null $countPerProject
     *
     * @return self
     */
    public function setCountPerProject(?string $countPerProject): self
    {
        $this->countPerProject = $countPerProject;
        return $this;
    }
    /**
     * The expiration time of the token for internal Registry, in minutes.
     *
     * @return int|null
     */
    public function getTokenExpiration(): ?int
    {
        return $this->tokenExpiration;
    }
    /**
     * The expiration time of the token for internal Registry, in minutes.
     *
     * @param int|null $tokenExpiration
     *
     * @return self
     */
    public function setTokenExpiration(?int $tokenExpiration): self
    {
        $this->tokenExpiration = $tokenExpiration;
        return $this;
    }
    /**
     * The scope to search ldap. '0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE'
     *
     * @return int|null
     */
    public function getLdapGroupSearchScope(): ?int
    {
        return $this->ldapGroupSearchScope;
    }
    /**
     * The scope to search ldap. '0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE'
     *
     * @param int|null $ldapGroupSearchScope
     *
     * @return self
     */
    public function setLdapGroupSearchScope(?int $ldapGroupSearchScope): self
    {
        $this->ldapGroupSearchScope = $ldapGroupSearchScope;
        return $this;
    }
    /**
     * When it's set to true the system will access Email server via TLS by default.  If it's set to false, it still will handle "STARTTLS" from server side.
     *
     * @return bool|null
     */
    public function getEmailSsl(): ?bool
    {
        return $this->emailSsl;
    }
    /**
     * When it's set to true the system will access Email server via TLS by default.  If it's set to false, it still will handle "STARTTLS" from server side.
     *
     * @param bool|null $emailSsl
     *
     * @return self
     */
    public function setEmailSsl(?bool $emailSsl): self
    {
        $this->emailSsl = $emailSsl;
        return $this;
    }
    /**
     * The port of SMTP server.
     *
     * @return int|null
     */
    public function getEmailPort(): ?int
    {
        return $this->emailPort;
    }
    /**
     * The port of SMTP server.
     *
     * @param int|null $emailPort
     *
     * @return self
     */
    public function setEmailPort(?int $emailPort): self
    {
        $this->emailPort = $emailPort;
        return $this;
    }
    /**
     * The hostname of SMTP server that sends Email notification.
     *
     * @return string|null
     */
    public function getEmailHost(): ?string
    {
        return $this->emailHost;
    }
    /**
     * The hostname of SMTP server that sends Email notification.
     *
     * @param string|null $emailHost
     *
     * @return self
     */
    public function setEmailHost(?string $emailHost): self
    {
        $this->emailHost = $emailHost;
        return $this;
    }
    /**
     * The sender name for Email notification.
     *
     * @return string|null
     */
    public function getEmailFrom(): ?string
    {
        return $this->emailFrom;
    }
    /**
     * The sender name for Email notification.
     *
     * @param string|null $emailFrom
     *
     * @return self
     */
    public function setEmailFrom(?string $emailFrom): self
    {
        $this->emailFrom = $emailFrom;
        return $this;
    }
}
