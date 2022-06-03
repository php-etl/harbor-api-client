<?php

namespace Gyroscops\Harbor\Api\Model;

class Configurations
{
    /**
     * Whether verify your OIDC server certificate, disable it if your OIDC server is hosted via self-hosted certificate.
     *
     * @var bool
     */
    protected $oidcVerifyCert;
    /**
     * By default it's empty so the email_username is picked.
     *
     * @var string
     */
    protected $emailIdentity;
    /**
     * The filter to search the ldap group.
     *
     * @var string
     */
    protected $ldapGroupSearchFilter;
    /**
     * The auth mode of current system, such as "db_auth", "ldap_auth"
     *
     * @var string
     */
    protected $authMode;
    /**
     * Whether the Harbor instance supports self-registration.  If it's set to false, admin need to add user to the instance.
     *
     * @var bool
     */
    protected $selfRegistration;
    /**
     * The scope sent to OIDC server during authentication, should be separated by comma. It has to contain “openid”, and “offline_access”. If you are using google, please remove “offline_access” from this field.
     *
     * @var string
     */
    protected $oidcScope;
    /**
     * The DN of the user to do the search.
     *
     * @var string
     */
    protected $ldapSearchDn;
    /**
     * The default storage quota for the new created projects.
     *
     * @var string
     */
    protected $storagePerProject;
    /**
     * 
     *
     * @var ConfigurationsScanAllPolicy
     */
    protected $scanAllPolicy;
    /**
     * Whether or not the certificate will be verified when Harbor tries to access a remote Harbor instance for replication.
     *
     * @var bool
     */
    protected $verifyRemoteCert;
    /**
     * timeout in seconds for connection to LDAP server.
     *
     * @var int
     */
    protected $ldapTimeout;
    /**
     * The Base DN for LDAP binding.
     *
     * @var string
     */
    protected $ldapBaseDn;
    /**
     * The filter for LDAP binding.
     *
     * @var string
     */
    protected $ldapFilter;
    /**
     * 'docker push' is prohibited by Harbor if you set it to true.   
     *
     * @var bool
     */
    protected $readOnly;
    /**
     * This attribute indicates whether quota per project enabled in harbor
     *
     * @var bool
     */
    protected $quotaPerProjectEnable;
    /**
     * The URL of LDAP server.
     *
     * @var string
     */
    protected $ldapUrl;
    /**
     * The name of the OIDC provider.
     *
     * @var string
     */
    protected $oidcName;
    /**
     * This attribute restricts what users have the permission to create project.  It can be "everyone" or "adminonly".
     *
     * @var string
     */
    protected $projectCreationRestriction;
    /**
     * The attribute which is used as identity for the LDAP binding, such as "CN" or "SAMAccountname"
     *
     * @var string
     */
    protected $ldapUid;
    /**
     * The client id of the OIDC.
     *
     * @var string
     */
    protected $oidcClientId;
    /**
     * The base DN to search LDAP group.
     *
     * @var string
     */
    protected $ldapGroupBaseDn;
    /**
     * The attribute which is used as identity of the LDAP group, default is cn.
     *
     * @var string
     */
    protected $ldapGroupAttributeName;
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the email server.
     *
     * @var bool
     */
    protected $emailInsecure;
    /**
     * Specify the ldap group which have the same privilege with Harbor admin.
     *
     * @var string
     */
    protected $ldapGroupAdminDn;
    /**
     * The username for authenticate against SMTP server.
     *
     * @var string
     */
    protected $emailUsername;
    /**
     * The URL of an OIDC-complaint server, must start with 'https://'.
     *
     * @var string
     */
    protected $oidcEndpoint;
    /**
     * The client secret of the OIDC.
     *
     * @var string
     */
    protected $oidcClientSecret;
    /**
     * 0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE
     *
     * @var int
     */
    protected $ldapScope;
    /**
     * The default count quota for the new created projects.
     *
     * @var string
     */
    protected $countPerProject;
    /**
     * The expiration time of the token for internal Registry, in minutes.
     *
     * @var int
     */
    protected $tokenExpiration;
    /**
     * The scope to search ldap. '0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE'
     *
     * @var int
     */
    protected $ldapGroupSearchScope;
    /**
     * When it's set to true the system will access Email server via TLS by default.  If it's set to false, it still will handle "STARTTLS" from server side.
     *
     * @var bool
     */
    protected $emailSsl;
    /**
     * The port of SMTP server.
     *
     * @var int
     */
    protected $emailPort;
    /**
     * The hostname of SMTP server that sends Email notification.
     *
     * @var string
     */
    protected $emailHost;
    /**
     * The sender name for Email notification.
     *
     * @var string
     */
    protected $emailFrom;
    /**
     * Whether verify your OIDC server certificate, disable it if your OIDC server is hosted via self-hosted certificate.
     *
     * @return bool
     */
    public function getOidcVerifyCert() : bool
    {
        return $this->oidcVerifyCert;
    }
    /**
     * Whether verify your OIDC server certificate, disable it if your OIDC server is hosted via self-hosted certificate.
     *
     * @param bool $oidcVerifyCert
     *
     * @return self
     */
    public function setOidcVerifyCert(bool $oidcVerifyCert) : self
    {
        $this->oidcVerifyCert = $oidcVerifyCert;
        return $this;
    }
    /**
     * By default it's empty so the email_username is picked.
     *
     * @return string
     */
    public function getEmailIdentity() : string
    {
        return $this->emailIdentity;
    }
    /**
     * By default it's empty so the email_username is picked.
     *
     * @param string $emailIdentity
     *
     * @return self
     */
    public function setEmailIdentity(string $emailIdentity) : self
    {
        $this->emailIdentity = $emailIdentity;
        return $this;
    }
    /**
     * The filter to search the ldap group.
     *
     * @return string
     */
    public function getLdapGroupSearchFilter() : string
    {
        return $this->ldapGroupSearchFilter;
    }
    /**
     * The filter to search the ldap group.
     *
     * @param string $ldapGroupSearchFilter
     *
     * @return self
     */
    public function setLdapGroupSearchFilter(string $ldapGroupSearchFilter) : self
    {
        $this->ldapGroupSearchFilter = $ldapGroupSearchFilter;
        return $this;
    }
    /**
     * The auth mode of current system, such as "db_auth", "ldap_auth"
     *
     * @return string
     */
    public function getAuthMode() : string
    {
        return $this->authMode;
    }
    /**
     * The auth mode of current system, such as "db_auth", "ldap_auth"
     *
     * @param string $authMode
     *
     * @return self
     */
    public function setAuthMode(string $authMode) : self
    {
        $this->authMode = $authMode;
        return $this;
    }
    /**
     * Whether the Harbor instance supports self-registration.  If it's set to false, admin need to add user to the instance.
     *
     * @return bool
     */
    public function getSelfRegistration() : bool
    {
        return $this->selfRegistration;
    }
    /**
     * Whether the Harbor instance supports self-registration.  If it's set to false, admin need to add user to the instance.
     *
     * @param bool $selfRegistration
     *
     * @return self
     */
    public function setSelfRegistration(bool $selfRegistration) : self
    {
        $this->selfRegistration = $selfRegistration;
        return $this;
    }
    /**
     * The scope sent to OIDC server during authentication, should be separated by comma. It has to contain “openid”, and “offline_access”. If you are using google, please remove “offline_access” from this field.
     *
     * @return string
     */
    public function getOidcScope() : string
    {
        return $this->oidcScope;
    }
    /**
     * The scope sent to OIDC server during authentication, should be separated by comma. It has to contain “openid”, and “offline_access”. If you are using google, please remove “offline_access” from this field.
     *
     * @param string $oidcScope
     *
     * @return self
     */
    public function setOidcScope(string $oidcScope) : self
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
     * The default storage quota for the new created projects.
     *
     * @return string
     */
    public function getStoragePerProject() : string
    {
        return $this->storagePerProject;
    }
    /**
     * The default storage quota for the new created projects.
     *
     * @param string $storagePerProject
     *
     * @return self
     */
    public function setStoragePerProject(string $storagePerProject) : self
    {
        $this->storagePerProject = $storagePerProject;
        return $this;
    }
    /**
     * 
     *
     * @return ConfigurationsScanAllPolicy
     */
    public function getScanAllPolicy() : ConfigurationsScanAllPolicy
    {
        return $this->scanAllPolicy;
    }
    /**
     * 
     *
     * @param ConfigurationsScanAllPolicy $scanAllPolicy
     *
     * @return self
     */
    public function setScanAllPolicy(ConfigurationsScanAllPolicy $scanAllPolicy) : self
    {
        $this->scanAllPolicy = $scanAllPolicy;
        return $this;
    }
    /**
     * Whether or not the certificate will be verified when Harbor tries to access a remote Harbor instance for replication.
     *
     * @return bool
     */
    public function getVerifyRemoteCert() : bool
    {
        return $this->verifyRemoteCert;
    }
    /**
     * Whether or not the certificate will be verified when Harbor tries to access a remote Harbor instance for replication.
     *
     * @param bool $verifyRemoteCert
     *
     * @return self
     */
    public function setVerifyRemoteCert(bool $verifyRemoteCert) : self
    {
        $this->verifyRemoteCert = $verifyRemoteCert;
        return $this;
    }
    /**
     * timeout in seconds for connection to LDAP server.
     *
     * @return int
     */
    public function getLdapTimeout() : int
    {
        return $this->ldapTimeout;
    }
    /**
     * timeout in seconds for connection to LDAP server.
     *
     * @param int $ldapTimeout
     *
     * @return self
     */
    public function setLdapTimeout(int $ldapTimeout) : self
    {
        $this->ldapTimeout = $ldapTimeout;
        return $this;
    }
    /**
     * The Base DN for LDAP binding.
     *
     * @return string
     */
    public function getLdapBaseDn() : string
    {
        return $this->ldapBaseDn;
    }
    /**
     * The Base DN for LDAP binding.
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
     * The filter for LDAP binding.
     *
     * @return string
     */
    public function getLdapFilter() : string
    {
        return $this->ldapFilter;
    }
    /**
     * The filter for LDAP binding.
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
    /**
     * 'docker push' is prohibited by Harbor if you set it to true.   
     *
     * @return bool
     */
    public function getReadOnly() : bool
    {
        return $this->readOnly;
    }
    /**
     * 'docker push' is prohibited by Harbor if you set it to true.   
     *
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly) : self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * This attribute indicates whether quota per project enabled in harbor
     *
     * @return bool
     */
    public function getQuotaPerProjectEnable() : bool
    {
        return $this->quotaPerProjectEnable;
    }
    /**
     * This attribute indicates whether quota per project enabled in harbor
     *
     * @param bool $quotaPerProjectEnable
     *
     * @return self
     */
    public function setQuotaPerProjectEnable(bool $quotaPerProjectEnable) : self
    {
        $this->quotaPerProjectEnable = $quotaPerProjectEnable;
        return $this;
    }
    /**
     * The URL of LDAP server.
     *
     * @return string
     */
    public function getLdapUrl() : string
    {
        return $this->ldapUrl;
    }
    /**
     * The URL of LDAP server.
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
     * The name of the OIDC provider.
     *
     * @return string
     */
    public function getOidcName() : string
    {
        return $this->oidcName;
    }
    /**
     * The name of the OIDC provider.
     *
     * @param string $oidcName
     *
     * @return self
     */
    public function setOidcName(string $oidcName) : self
    {
        $this->oidcName = $oidcName;
        return $this;
    }
    /**
     * This attribute restricts what users have the permission to create project.  It can be "everyone" or "adminonly".
     *
     * @return string
     */
    public function getProjectCreationRestriction() : string
    {
        return $this->projectCreationRestriction;
    }
    /**
     * This attribute restricts what users have the permission to create project.  It can be "everyone" or "adminonly".
     *
     * @param string $projectCreationRestriction
     *
     * @return self
     */
    public function setProjectCreationRestriction(string $projectCreationRestriction) : self
    {
        $this->projectCreationRestriction = $projectCreationRestriction;
        return $this;
    }
    /**
     * The attribute which is used as identity for the LDAP binding, such as "CN" or "SAMAccountname"
     *
     * @return string
     */
    public function getLdapUid() : string
    {
        return $this->ldapUid;
    }
    /**
     * The attribute which is used as identity for the LDAP binding, such as "CN" or "SAMAccountname"
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
     * The client id of the OIDC.
     *
     * @return string
     */
    public function getOidcClientId() : string
    {
        return $this->oidcClientId;
    }
    /**
     * The client id of the OIDC.
     *
     * @param string $oidcClientId
     *
     * @return self
     */
    public function setOidcClientId(string $oidcClientId) : self
    {
        $this->oidcClientId = $oidcClientId;
        return $this;
    }
    /**
     * The base DN to search LDAP group.
     *
     * @return string
     */
    public function getLdapGroupBaseDn() : string
    {
        return $this->ldapGroupBaseDn;
    }
    /**
     * The base DN to search LDAP group.
     *
     * @param string $ldapGroupBaseDn
     *
     * @return self
     */
    public function setLdapGroupBaseDn(string $ldapGroupBaseDn) : self
    {
        $this->ldapGroupBaseDn = $ldapGroupBaseDn;
        return $this;
    }
    /**
     * The attribute which is used as identity of the LDAP group, default is cn.
     *
     * @return string
     */
    public function getLdapGroupAttributeName() : string
    {
        return $this->ldapGroupAttributeName;
    }
    /**
     * The attribute which is used as identity of the LDAP group, default is cn.
     *
     * @param string $ldapGroupAttributeName
     *
     * @return self
     */
    public function setLdapGroupAttributeName(string $ldapGroupAttributeName) : self
    {
        $this->ldapGroupAttributeName = $ldapGroupAttributeName;
        return $this;
    }
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the email server.
     *
     * @return bool
     */
    public function getEmailInsecure() : bool
    {
        return $this->emailInsecure;
    }
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the email server.
     *
     * @param bool $emailInsecure
     *
     * @return self
     */
    public function setEmailInsecure(bool $emailInsecure) : self
    {
        $this->emailInsecure = $emailInsecure;
        return $this;
    }
    /**
     * Specify the ldap group which have the same privilege with Harbor admin.
     *
     * @return string
     */
    public function getLdapGroupAdminDn() : string
    {
        return $this->ldapGroupAdminDn;
    }
    /**
     * Specify the ldap group which have the same privilege with Harbor admin.
     *
     * @param string $ldapGroupAdminDn
     *
     * @return self
     */
    public function setLdapGroupAdminDn(string $ldapGroupAdminDn) : self
    {
        $this->ldapGroupAdminDn = $ldapGroupAdminDn;
        return $this;
    }
    /**
     * The username for authenticate against SMTP server.
     *
     * @return string
     */
    public function getEmailUsername() : string
    {
        return $this->emailUsername;
    }
    /**
     * The username for authenticate against SMTP server.
     *
     * @param string $emailUsername
     *
     * @return self
     */
    public function setEmailUsername(string $emailUsername) : self
    {
        $this->emailUsername = $emailUsername;
        return $this;
    }
    /**
     * The URL of an OIDC-complaint server, must start with 'https://'.
     *
     * @return string
     */
    public function getOidcEndpoint() : string
    {
        return $this->oidcEndpoint;
    }
    /**
     * The URL of an OIDC-complaint server, must start with 'https://'.
     *
     * @param string $oidcEndpoint
     *
     * @return self
     */
    public function setOidcEndpoint(string $oidcEndpoint) : self
    {
        $this->oidcEndpoint = $oidcEndpoint;
        return $this;
    }
    /**
     * The client secret of the OIDC.
     *
     * @return string
     */
    public function getOidcClientSecret() : string
    {
        return $this->oidcClientSecret;
    }
    /**
     * The client secret of the OIDC.
     *
     * @param string $oidcClientSecret
     *
     * @return self
     */
    public function setOidcClientSecret(string $oidcClientSecret) : self
    {
        $this->oidcClientSecret = $oidcClientSecret;
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
     * The default count quota for the new created projects.
     *
     * @return string
     */
    public function getCountPerProject() : string
    {
        return $this->countPerProject;
    }
    /**
     * The default count quota for the new created projects.
     *
     * @param string $countPerProject
     *
     * @return self
     */
    public function setCountPerProject(string $countPerProject) : self
    {
        $this->countPerProject = $countPerProject;
        return $this;
    }
    /**
     * The expiration time of the token for internal Registry, in minutes.
     *
     * @return int
     */
    public function getTokenExpiration() : int
    {
        return $this->tokenExpiration;
    }
    /**
     * The expiration time of the token for internal Registry, in minutes.
     *
     * @param int $tokenExpiration
     *
     * @return self
     */
    public function setTokenExpiration(int $tokenExpiration) : self
    {
        $this->tokenExpiration = $tokenExpiration;
        return $this;
    }
    /**
     * The scope to search ldap. '0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE'
     *
     * @return int
     */
    public function getLdapGroupSearchScope() : int
    {
        return $this->ldapGroupSearchScope;
    }
    /**
     * The scope to search ldap. '0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE'
     *
     * @param int $ldapGroupSearchScope
     *
     * @return self
     */
    public function setLdapGroupSearchScope(int $ldapGroupSearchScope) : self
    {
        $this->ldapGroupSearchScope = $ldapGroupSearchScope;
        return $this;
    }
    /**
     * When it's set to true the system will access Email server via TLS by default.  If it's set to false, it still will handle "STARTTLS" from server side.
     *
     * @return bool
     */
    public function getEmailSsl() : bool
    {
        return $this->emailSsl;
    }
    /**
     * When it's set to true the system will access Email server via TLS by default.  If it's set to false, it still will handle "STARTTLS" from server side.
     *
     * @param bool $emailSsl
     *
     * @return self
     */
    public function setEmailSsl(bool $emailSsl) : self
    {
        $this->emailSsl = $emailSsl;
        return $this;
    }
    /**
     * The port of SMTP server.
     *
     * @return int
     */
    public function getEmailPort() : int
    {
        return $this->emailPort;
    }
    /**
     * The port of SMTP server.
     *
     * @param int $emailPort
     *
     * @return self
     */
    public function setEmailPort(int $emailPort) : self
    {
        $this->emailPort = $emailPort;
        return $this;
    }
    /**
     * The hostname of SMTP server that sends Email notification.
     *
     * @return string
     */
    public function getEmailHost() : string
    {
        return $this->emailHost;
    }
    /**
     * The hostname of SMTP server that sends Email notification.
     *
     * @param string $emailHost
     *
     * @return self
     */
    public function setEmailHost(string $emailHost) : self
    {
        $this->emailHost = $emailHost;
        return $this;
    }
    /**
     * The sender name for Email notification.
     *
     * @return string
     */
    public function getEmailFrom() : string
    {
        return $this->emailFrom;
    }
    /**
     * The sender name for Email notification.
     *
     * @param string $emailFrom
     *
     * @return self
     */
    public function setEmailFrom(string $emailFrom) : self
    {
        $this->emailFrom = $emailFrom;
        return $this;
    }
}