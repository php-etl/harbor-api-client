<?php

namespace Gyroscops\Harbor\Api\Model;

class Configurations
{
    /**
     * The auth mode of current system, such as "db_auth", "ldap_auth", "oidc_auth"
     *
     * @var string|null
     */
    protected $authMode;
    /**
     * The flag to indicate whether the current auth mode should consider as a primary one.
     *
     * @var bool|null
     */
    protected $primaryAuthMode;
    /**
     * The Base DN for LDAP binding.
     *
     * @var string|null
     */
    protected $ldapBaseDn;
    /**
     * The filter for LDAP search
     *
     * @var string|null
     */
    protected $ldapFilter;
    /**
     * The base DN to search LDAP group.
     *
     * @var string|null
     */
    protected $ldapGroupBaseDn;
    /**
     * Specify the ldap group which have the same privilege with Harbor admin
     *
     * @var string|null
     */
    protected $ldapGroupAdminDn;
    /**
     * The attribute which is used as identity of the LDAP group, default is cn.'
     *
     * @var string|null
     */
    protected $ldapGroupAttributeName;
    /**
     * The filter to search the ldap group
     *
     * @var string|null
     */
    protected $ldapGroupSearchFilter;
    /**
     * The scope to search ldap group. ''0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE''
     *
     * @var int|null
     */
    protected $ldapGroupSearchScope;
    /**
     * The scope to search ldap users,'0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE'
     *
     * @var int|null
     */
    protected $ldapScope;
    /**
     * The DN of the user to do the search.
     *
     * @var string|null
     */
    protected $ldapSearchDn;
    /**
     * The password of the ldap search dn
     *
     * @var string|null
     */
    protected $ldapSearchPassword;
    /**
     * Timeout in seconds for connection to LDAP server
     *
     * @var int|null
     */
    protected $ldapTimeout;
    /**
     * The attribute which is used as identity for the LDAP binding, such as "CN" or "SAMAccountname"
     *
     * @var string|null
     */
    protected $ldapUid;
    /**
     * The URL of LDAP server
     *
     * @var string|null
     */
    protected $ldapUrl;
    /**
     * Whether verify your OIDC server certificate, disable it if your OIDC server is hosted via self-hosted certificate.
     *
     * @var bool|null
     */
    protected $ldapVerifyCert;
    /**
     * The user attribute to identify the group membership
     *
     * @var string|null
     */
    protected $ldapGroupMembershipAttribute;
    /**
     * Indicate who can create projects, it could be ''adminonly'' or ''everyone''.
     *
     * @var string|null
     */
    protected $projectCreationRestriction;
    /**
     * The flag to indicate whether Harbor is in readonly mode.
     *
     * @var bool|null
     */
    protected $readOnly;
    /**
     * Whether the Harbor instance supports self-registration.  If it''s set to false, admin need to add user to the instance.
     *
     * @var bool|null
     */
    protected $selfRegistration;
    /**
     * The expiration time of the token for internal Registry, in minutes.
     *
     * @var int|null
     */
    protected $tokenExpiration;
    /**
     * The client id of UAA
     *
     * @var string|null
     */
    protected $uaaClientId;
    /**
     * The client secret of the UAA
     *
     * @var string|null
     */
    protected $uaaClientSecret;
    /**
     * The endpoint of the UAA
     *
     * @var string|null
     */
    protected $uaaEndpoint;
    /**
     * Verify the certificate in UAA server
     *
     * @var bool|null
     */
    protected $uaaVerifyCert;
    /**
     * The endpoint of the HTTP auth
     *
     * @var string|null
     */
    protected $httpAuthproxyEndpoint;
    /**
     * The token review endpoint
     *
     * @var string|null
     */
    protected $httpAuthproxyTokenreviewEndpoint;
    /**
     * The group which has the harbor admin privileges
     *
     * @var string|null
     */
    protected $httpAuthproxyAdminGroups;
    /**
     * The username which has the harbor admin privileges
     *
     * @var string|null
     */
    protected $httpAuthproxyAdminUsernames;
    /**
     * Verify the HTTP auth provider's certificate
     *
     * @var bool|null
     */
    protected $httpAuthproxyVerifyCert;
    /**
     * Search user before onboard
     *
     * @var bool|null
     */
    protected $httpAuthproxySkipSearch;
    /**
     * The certificate of the HTTP auth provider
     *
     * @var string|null
     */
    protected $httpAuthproxyServerCertificate;
    /**
     * The OIDC provider name
     *
     * @var string|null
     */
    protected $oidcName;
    /**
     * The endpoint of the OIDC provider
     *
     * @var string|null
     */
    protected $oidcEndpoint;
    /**
     * The client ID of the OIDC provider
     *
     * @var string|null
     */
    protected $oidcClientId;
    /**
     * The OIDC provider secret
     *
     * @var string|null
     */
    protected $oidcClientSecret;
    /**
     * The attribute claims the group name
     *
     * @var string|null
     */
    protected $oidcGroupsClaim;
    /**
     * The OIDC group which has the harbor admin privileges
     *
     * @var string|null
     */
    protected $oidcAdminGroup;
    /**
     * The OIDC group filter which filters out the group name doesn't match the regular expression
     *
     * @var string|null
     */
    protected $oidcGroupFilter;
    /**
     * The scope of the OIDC provider
     *
     * @var string|null
     */
    protected $oidcScope;
    /**
     * The attribute claims the username
     *
     * @var string|null
     */
    protected $oidcUserClaim;
    /**
     * Verify the OIDC provider's certificate'
     *
     * @var bool|null
     */
    protected $oidcVerifyCert;
    /**
     * Auto onboard the OIDC user
     *
     * @var bool|null
     */
    protected $oidcAutoOnboard;
    /**
     * Extra parameters to add when redirect request to OIDC provider
     *
     * @var string|null
     */
    protected $oidcExtraRedirectParms;
    /**
     * The robot account token duration in days
     *
     * @var int|null
     */
    protected $robotTokenDuration;
    /**
     * The rebot account name prefix
     *
     * @var string|null
     */
    protected $robotNamePrefix;
    /**
     * Enable notification
     *
     * @var bool|null
     */
    protected $notificationEnable;
    /**
     * Enable quota per project
     *
     * @var bool|null
     */
    protected $quotaPerProjectEnable;
    /**
     * The storage quota per project
     *
     * @var int|null
     */
    protected $storagePerProject;
    /**
     * The audit log forward endpoint
     *
     * @var string|null
     */
    protected $auditLogForwardEndpoint;
    /**
     * Skip audit log database
     *
     * @var bool|null
     */
    protected $skipAuditLogDatabase;
    /**
     * The session timeout for harbor, in minutes.
     *
     * @var int|null
     */
    protected $sessionTimeout;
    /**
     * Whether or not to skip update pull time for scanner
     *
     * @var bool|null
     */
    protected $scannerSkipUpdatePulltime;
    /**
     * The banner message for the UI.It is the stringified result of the banner message object
     *
     * @var string|null
     */
    protected $bannerMessage;
    /**
     * The auth mode of current system, such as "db_auth", "ldap_auth", "oidc_auth"
     *
     * @return string|null
     */
    public function getAuthMode() : ?string
    {
        return $this->authMode;
    }
    /**
     * The auth mode of current system, such as "db_auth", "ldap_auth", "oidc_auth"
     *
     * @param string|null $authMode
     *
     * @return self
     */
    public function setAuthMode(?string $authMode) : self
    {
        $this->authMode = $authMode;
        return $this;
    }
    /**
     * The flag to indicate whether the current auth mode should consider as a primary one.
     *
     * @return bool|null
     */
    public function getPrimaryAuthMode() : ?bool
    {
        return $this->primaryAuthMode;
    }
    /**
     * The flag to indicate whether the current auth mode should consider as a primary one.
     *
     * @param bool|null $primaryAuthMode
     *
     * @return self
     */
    public function setPrimaryAuthMode(?bool $primaryAuthMode) : self
    {
        $this->primaryAuthMode = $primaryAuthMode;
        return $this;
    }
    /**
     * The Base DN for LDAP binding.
     *
     * @return string|null
     */
    public function getLdapBaseDn() : ?string
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
    public function setLdapBaseDn(?string $ldapBaseDn) : self
    {
        $this->ldapBaseDn = $ldapBaseDn;
        return $this;
    }
    /**
     * The filter for LDAP search
     *
     * @return string|null
     */
    public function getLdapFilter() : ?string
    {
        return $this->ldapFilter;
    }
    /**
     * The filter for LDAP search
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
     * The base DN to search LDAP group.
     *
     * @return string|null
     */
    public function getLdapGroupBaseDn() : ?string
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
    public function setLdapGroupBaseDn(?string $ldapGroupBaseDn) : self
    {
        $this->ldapGroupBaseDn = $ldapGroupBaseDn;
        return $this;
    }
    /**
     * Specify the ldap group which have the same privilege with Harbor admin
     *
     * @return string|null
     */
    public function getLdapGroupAdminDn() : ?string
    {
        return $this->ldapGroupAdminDn;
    }
    /**
     * Specify the ldap group which have the same privilege with Harbor admin
     *
     * @param string|null $ldapGroupAdminDn
     *
     * @return self
     */
    public function setLdapGroupAdminDn(?string $ldapGroupAdminDn) : self
    {
        $this->ldapGroupAdminDn = $ldapGroupAdminDn;
        return $this;
    }
    /**
     * The attribute which is used as identity of the LDAP group, default is cn.'
     *
     * @return string|null
     */
    public function getLdapGroupAttributeName() : ?string
    {
        return $this->ldapGroupAttributeName;
    }
    /**
     * The attribute which is used as identity of the LDAP group, default is cn.'
     *
     * @param string|null $ldapGroupAttributeName
     *
     * @return self
     */
    public function setLdapGroupAttributeName(?string $ldapGroupAttributeName) : self
    {
        $this->ldapGroupAttributeName = $ldapGroupAttributeName;
        return $this;
    }
    /**
     * The filter to search the ldap group
     *
     * @return string|null
     */
    public function getLdapGroupSearchFilter() : ?string
    {
        return $this->ldapGroupSearchFilter;
    }
    /**
     * The filter to search the ldap group
     *
     * @param string|null $ldapGroupSearchFilter
     *
     * @return self
     */
    public function setLdapGroupSearchFilter(?string $ldapGroupSearchFilter) : self
    {
        $this->ldapGroupSearchFilter = $ldapGroupSearchFilter;
        return $this;
    }
    /**
     * The scope to search ldap group. ''0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE''
     *
     * @return int|null
     */
    public function getLdapGroupSearchScope() : ?int
    {
        return $this->ldapGroupSearchScope;
    }
    /**
     * The scope to search ldap group. ''0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE''
     *
     * @param int|null $ldapGroupSearchScope
     *
     * @return self
     */
    public function setLdapGroupSearchScope(?int $ldapGroupSearchScope) : self
    {
        $this->ldapGroupSearchScope = $ldapGroupSearchScope;
        return $this;
    }
    /**
     * The scope to search ldap users,'0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE'
     *
     * @return int|null
     */
    public function getLdapScope() : ?int
    {
        return $this->ldapScope;
    }
    /**
     * The scope to search ldap users,'0-LDAP_SCOPE_BASE, 1-LDAP_SCOPE_ONELEVEL, 2-LDAP_SCOPE_SUBTREE'
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
     * The DN of the user to do the search.
     *
     * @return string|null
     */
    public function getLdapSearchDn() : ?string
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
    public function setLdapSearchDn(?string $ldapSearchDn) : self
    {
        $this->ldapSearchDn = $ldapSearchDn;
        return $this;
    }
    /**
     * The password of the ldap search dn
     *
     * @return string|null
     */
    public function getLdapSearchPassword() : ?string
    {
        return $this->ldapSearchPassword;
    }
    /**
     * The password of the ldap search dn
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
     * Timeout in seconds for connection to LDAP server
     *
     * @return int|null
     */
    public function getLdapTimeout() : ?int
    {
        return $this->ldapTimeout;
    }
    /**
     * Timeout in seconds for connection to LDAP server
     *
     * @param int|null $ldapTimeout
     *
     * @return self
     */
    public function setLdapTimeout(?int $ldapTimeout) : self
    {
        $this->ldapTimeout = $ldapTimeout;
        return $this;
    }
    /**
     * The attribute which is used as identity for the LDAP binding, such as "CN" or "SAMAccountname"
     *
     * @return string|null
     */
    public function getLdapUid() : ?string
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
    public function setLdapUid(?string $ldapUid) : self
    {
        $this->ldapUid = $ldapUid;
        return $this;
    }
    /**
     * The URL of LDAP server
     *
     * @return string|null
     */
    public function getLdapUrl() : ?string
    {
        return $this->ldapUrl;
    }
    /**
     * The URL of LDAP server
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
     * Whether verify your OIDC server certificate, disable it if your OIDC server is hosted via self-hosted certificate.
     *
     * @return bool|null
     */
    public function getLdapVerifyCert() : ?bool
    {
        return $this->ldapVerifyCert;
    }
    /**
     * Whether verify your OIDC server certificate, disable it if your OIDC server is hosted via self-hosted certificate.
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
    /**
     * The user attribute to identify the group membership
     *
     * @return string|null
     */
    public function getLdapGroupMembershipAttribute() : ?string
    {
        return $this->ldapGroupMembershipAttribute;
    }
    /**
     * The user attribute to identify the group membership
     *
     * @param string|null $ldapGroupMembershipAttribute
     *
     * @return self
     */
    public function setLdapGroupMembershipAttribute(?string $ldapGroupMembershipAttribute) : self
    {
        $this->ldapGroupMembershipAttribute = $ldapGroupMembershipAttribute;
        return $this;
    }
    /**
     * Indicate who can create projects, it could be ''adminonly'' or ''everyone''.
     *
     * @return string|null
     */
    public function getProjectCreationRestriction() : ?string
    {
        return $this->projectCreationRestriction;
    }
    /**
     * Indicate who can create projects, it could be ''adminonly'' or ''everyone''.
     *
     * @param string|null $projectCreationRestriction
     *
     * @return self
     */
    public function setProjectCreationRestriction(?string $projectCreationRestriction) : self
    {
        $this->projectCreationRestriction = $projectCreationRestriction;
        return $this;
    }
    /**
     * The flag to indicate whether Harbor is in readonly mode.
     *
     * @return bool|null
     */
    public function getReadOnly() : ?bool
    {
        return $this->readOnly;
    }
    /**
     * The flag to indicate whether Harbor is in readonly mode.
     *
     * @param bool|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly) : self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * Whether the Harbor instance supports self-registration.  If it''s set to false, admin need to add user to the instance.
     *
     * @return bool|null
     */
    public function getSelfRegistration() : ?bool
    {
        return $this->selfRegistration;
    }
    /**
     * Whether the Harbor instance supports self-registration.  If it''s set to false, admin need to add user to the instance.
     *
     * @param bool|null $selfRegistration
     *
     * @return self
     */
    public function setSelfRegistration(?bool $selfRegistration) : self
    {
        $this->selfRegistration = $selfRegistration;
        return $this;
    }
    /**
     * The expiration time of the token for internal Registry, in minutes.
     *
     * @return int|null
     */
    public function getTokenExpiration() : ?int
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
    public function setTokenExpiration(?int $tokenExpiration) : self
    {
        $this->tokenExpiration = $tokenExpiration;
        return $this;
    }
    /**
     * The client id of UAA
     *
     * @return string|null
     */
    public function getUaaClientId() : ?string
    {
        return $this->uaaClientId;
    }
    /**
     * The client id of UAA
     *
     * @param string|null $uaaClientId
     *
     * @return self
     */
    public function setUaaClientId(?string $uaaClientId) : self
    {
        $this->uaaClientId = $uaaClientId;
        return $this;
    }
    /**
     * The client secret of the UAA
     *
     * @return string|null
     */
    public function getUaaClientSecret() : ?string
    {
        return $this->uaaClientSecret;
    }
    /**
     * The client secret of the UAA
     *
     * @param string|null $uaaClientSecret
     *
     * @return self
     */
    public function setUaaClientSecret(?string $uaaClientSecret) : self
    {
        $this->uaaClientSecret = $uaaClientSecret;
        return $this;
    }
    /**
     * The endpoint of the UAA
     *
     * @return string|null
     */
    public function getUaaEndpoint() : ?string
    {
        return $this->uaaEndpoint;
    }
    /**
     * The endpoint of the UAA
     *
     * @param string|null $uaaEndpoint
     *
     * @return self
     */
    public function setUaaEndpoint(?string $uaaEndpoint) : self
    {
        $this->uaaEndpoint = $uaaEndpoint;
        return $this;
    }
    /**
     * Verify the certificate in UAA server
     *
     * @return bool|null
     */
    public function getUaaVerifyCert() : ?bool
    {
        return $this->uaaVerifyCert;
    }
    /**
     * Verify the certificate in UAA server
     *
     * @param bool|null $uaaVerifyCert
     *
     * @return self
     */
    public function setUaaVerifyCert(?bool $uaaVerifyCert) : self
    {
        $this->uaaVerifyCert = $uaaVerifyCert;
        return $this;
    }
    /**
     * The endpoint of the HTTP auth
     *
     * @return string|null
     */
    public function getHttpAuthproxyEndpoint() : ?string
    {
        return $this->httpAuthproxyEndpoint;
    }
    /**
     * The endpoint of the HTTP auth
     *
     * @param string|null $httpAuthproxyEndpoint
     *
     * @return self
     */
    public function setHttpAuthproxyEndpoint(?string $httpAuthproxyEndpoint) : self
    {
        $this->httpAuthproxyEndpoint = $httpAuthproxyEndpoint;
        return $this;
    }
    /**
     * The token review endpoint
     *
     * @return string|null
     */
    public function getHttpAuthproxyTokenreviewEndpoint() : ?string
    {
        return $this->httpAuthproxyTokenreviewEndpoint;
    }
    /**
     * The token review endpoint
     *
     * @param string|null $httpAuthproxyTokenreviewEndpoint
     *
     * @return self
     */
    public function setHttpAuthproxyTokenreviewEndpoint(?string $httpAuthproxyTokenreviewEndpoint) : self
    {
        $this->httpAuthproxyTokenreviewEndpoint = $httpAuthproxyTokenreviewEndpoint;
        return $this;
    }
    /**
     * The group which has the harbor admin privileges
     *
     * @return string|null
     */
    public function getHttpAuthproxyAdminGroups() : ?string
    {
        return $this->httpAuthproxyAdminGroups;
    }
    /**
     * The group which has the harbor admin privileges
     *
     * @param string|null $httpAuthproxyAdminGroups
     *
     * @return self
     */
    public function setHttpAuthproxyAdminGroups(?string $httpAuthproxyAdminGroups) : self
    {
        $this->httpAuthproxyAdminGroups = $httpAuthproxyAdminGroups;
        return $this;
    }
    /**
     * The username which has the harbor admin privileges
     *
     * @return string|null
     */
    public function getHttpAuthproxyAdminUsernames() : ?string
    {
        return $this->httpAuthproxyAdminUsernames;
    }
    /**
     * The username which has the harbor admin privileges
     *
     * @param string|null $httpAuthproxyAdminUsernames
     *
     * @return self
     */
    public function setHttpAuthproxyAdminUsernames(?string $httpAuthproxyAdminUsernames) : self
    {
        $this->httpAuthproxyAdminUsernames = $httpAuthproxyAdminUsernames;
        return $this;
    }
    /**
     * Verify the HTTP auth provider's certificate
     *
     * @return bool|null
     */
    public function getHttpAuthproxyVerifyCert() : ?bool
    {
        return $this->httpAuthproxyVerifyCert;
    }
    /**
     * Verify the HTTP auth provider's certificate
     *
     * @param bool|null $httpAuthproxyVerifyCert
     *
     * @return self
     */
    public function setHttpAuthproxyVerifyCert(?bool $httpAuthproxyVerifyCert) : self
    {
        $this->httpAuthproxyVerifyCert = $httpAuthproxyVerifyCert;
        return $this;
    }
    /**
     * Search user before onboard
     *
     * @return bool|null
     */
    public function getHttpAuthproxySkipSearch() : ?bool
    {
        return $this->httpAuthproxySkipSearch;
    }
    /**
     * Search user before onboard
     *
     * @param bool|null $httpAuthproxySkipSearch
     *
     * @return self
     */
    public function setHttpAuthproxySkipSearch(?bool $httpAuthproxySkipSearch) : self
    {
        $this->httpAuthproxySkipSearch = $httpAuthproxySkipSearch;
        return $this;
    }
    /**
     * The certificate of the HTTP auth provider
     *
     * @return string|null
     */
    public function getHttpAuthproxyServerCertificate() : ?string
    {
        return $this->httpAuthproxyServerCertificate;
    }
    /**
     * The certificate of the HTTP auth provider
     *
     * @param string|null $httpAuthproxyServerCertificate
     *
     * @return self
     */
    public function setHttpAuthproxyServerCertificate(?string $httpAuthproxyServerCertificate) : self
    {
        $this->httpAuthproxyServerCertificate = $httpAuthproxyServerCertificate;
        return $this;
    }
    /**
     * The OIDC provider name
     *
     * @return string|null
     */
    public function getOidcName() : ?string
    {
        return $this->oidcName;
    }
    /**
     * The OIDC provider name
     *
     * @param string|null $oidcName
     *
     * @return self
     */
    public function setOidcName(?string $oidcName) : self
    {
        $this->oidcName = $oidcName;
        return $this;
    }
    /**
     * The endpoint of the OIDC provider
     *
     * @return string|null
     */
    public function getOidcEndpoint() : ?string
    {
        return $this->oidcEndpoint;
    }
    /**
     * The endpoint of the OIDC provider
     *
     * @param string|null $oidcEndpoint
     *
     * @return self
     */
    public function setOidcEndpoint(?string $oidcEndpoint) : self
    {
        $this->oidcEndpoint = $oidcEndpoint;
        return $this;
    }
    /**
     * The client ID of the OIDC provider
     *
     * @return string|null
     */
    public function getOidcClientId() : ?string
    {
        return $this->oidcClientId;
    }
    /**
     * The client ID of the OIDC provider
     *
     * @param string|null $oidcClientId
     *
     * @return self
     */
    public function setOidcClientId(?string $oidcClientId) : self
    {
        $this->oidcClientId = $oidcClientId;
        return $this;
    }
    /**
     * The OIDC provider secret
     *
     * @return string|null
     */
    public function getOidcClientSecret() : ?string
    {
        return $this->oidcClientSecret;
    }
    /**
     * The OIDC provider secret
     *
     * @param string|null $oidcClientSecret
     *
     * @return self
     */
    public function setOidcClientSecret(?string $oidcClientSecret) : self
    {
        $this->oidcClientSecret = $oidcClientSecret;
        return $this;
    }
    /**
     * The attribute claims the group name
     *
     * @return string|null
     */
    public function getOidcGroupsClaim() : ?string
    {
        return $this->oidcGroupsClaim;
    }
    /**
     * The attribute claims the group name
     *
     * @param string|null $oidcGroupsClaim
     *
     * @return self
     */
    public function setOidcGroupsClaim(?string $oidcGroupsClaim) : self
    {
        $this->oidcGroupsClaim = $oidcGroupsClaim;
        return $this;
    }
    /**
     * The OIDC group which has the harbor admin privileges
     *
     * @return string|null
     */
    public function getOidcAdminGroup() : ?string
    {
        return $this->oidcAdminGroup;
    }
    /**
     * The OIDC group which has the harbor admin privileges
     *
     * @param string|null $oidcAdminGroup
     *
     * @return self
     */
    public function setOidcAdminGroup(?string $oidcAdminGroup) : self
    {
        $this->oidcAdminGroup = $oidcAdminGroup;
        return $this;
    }
    /**
     * The OIDC group filter which filters out the group name doesn't match the regular expression
     *
     * @return string|null
     */
    public function getOidcGroupFilter() : ?string
    {
        return $this->oidcGroupFilter;
    }
    /**
     * The OIDC group filter which filters out the group name doesn't match the regular expression
     *
     * @param string|null $oidcGroupFilter
     *
     * @return self
     */
    public function setOidcGroupFilter(?string $oidcGroupFilter) : self
    {
        $this->oidcGroupFilter = $oidcGroupFilter;
        return $this;
    }
    /**
     * The scope of the OIDC provider
     *
     * @return string|null
     */
    public function getOidcScope() : ?string
    {
        return $this->oidcScope;
    }
    /**
     * The scope of the OIDC provider
     *
     * @param string|null $oidcScope
     *
     * @return self
     */
    public function setOidcScope(?string $oidcScope) : self
    {
        $this->oidcScope = $oidcScope;
        return $this;
    }
    /**
     * The attribute claims the username
     *
     * @return string|null
     */
    public function getOidcUserClaim() : ?string
    {
        return $this->oidcUserClaim;
    }
    /**
     * The attribute claims the username
     *
     * @param string|null $oidcUserClaim
     *
     * @return self
     */
    public function setOidcUserClaim(?string $oidcUserClaim) : self
    {
        $this->oidcUserClaim = $oidcUserClaim;
        return $this;
    }
    /**
     * Verify the OIDC provider's certificate'
     *
     * @return bool|null
     */
    public function getOidcVerifyCert() : ?bool
    {
        return $this->oidcVerifyCert;
    }
    /**
     * Verify the OIDC provider's certificate'
     *
     * @param bool|null $oidcVerifyCert
     *
     * @return self
     */
    public function setOidcVerifyCert(?bool $oidcVerifyCert) : self
    {
        $this->oidcVerifyCert = $oidcVerifyCert;
        return $this;
    }
    /**
     * Auto onboard the OIDC user
     *
     * @return bool|null
     */
    public function getOidcAutoOnboard() : ?bool
    {
        return $this->oidcAutoOnboard;
    }
    /**
     * Auto onboard the OIDC user
     *
     * @param bool|null $oidcAutoOnboard
     *
     * @return self
     */
    public function setOidcAutoOnboard(?bool $oidcAutoOnboard) : self
    {
        $this->oidcAutoOnboard = $oidcAutoOnboard;
        return $this;
    }
    /**
     * Extra parameters to add when redirect request to OIDC provider
     *
     * @return string|null
     */
    public function getOidcExtraRedirectParms() : ?string
    {
        return $this->oidcExtraRedirectParms;
    }
    /**
     * Extra parameters to add when redirect request to OIDC provider
     *
     * @param string|null $oidcExtraRedirectParms
     *
     * @return self
     */
    public function setOidcExtraRedirectParms(?string $oidcExtraRedirectParms) : self
    {
        $this->oidcExtraRedirectParms = $oidcExtraRedirectParms;
        return $this;
    }
    /**
     * The robot account token duration in days
     *
     * @return int|null
     */
    public function getRobotTokenDuration() : ?int
    {
        return $this->robotTokenDuration;
    }
    /**
     * The robot account token duration in days
     *
     * @param int|null $robotTokenDuration
     *
     * @return self
     */
    public function setRobotTokenDuration(?int $robotTokenDuration) : self
    {
        $this->robotTokenDuration = $robotTokenDuration;
        return $this;
    }
    /**
     * The rebot account name prefix
     *
     * @return string|null
     */
    public function getRobotNamePrefix() : ?string
    {
        return $this->robotNamePrefix;
    }
    /**
     * The rebot account name prefix
     *
     * @param string|null $robotNamePrefix
     *
     * @return self
     */
    public function setRobotNamePrefix(?string $robotNamePrefix) : self
    {
        $this->robotNamePrefix = $robotNamePrefix;
        return $this;
    }
    /**
     * Enable notification
     *
     * @return bool|null
     */
    public function getNotificationEnable() : ?bool
    {
        return $this->notificationEnable;
    }
    /**
     * Enable notification
     *
     * @param bool|null $notificationEnable
     *
     * @return self
     */
    public function setNotificationEnable(?bool $notificationEnable) : self
    {
        $this->notificationEnable = $notificationEnable;
        return $this;
    }
    /**
     * Enable quota per project
     *
     * @return bool|null
     */
    public function getQuotaPerProjectEnable() : ?bool
    {
        return $this->quotaPerProjectEnable;
    }
    /**
     * Enable quota per project
     *
     * @param bool|null $quotaPerProjectEnable
     *
     * @return self
     */
    public function setQuotaPerProjectEnable(?bool $quotaPerProjectEnable) : self
    {
        $this->quotaPerProjectEnable = $quotaPerProjectEnable;
        return $this;
    }
    /**
     * The storage quota per project
     *
     * @return int|null
     */
    public function getStoragePerProject() : ?int
    {
        return $this->storagePerProject;
    }
    /**
     * The storage quota per project
     *
     * @param int|null $storagePerProject
     *
     * @return self
     */
    public function setStoragePerProject(?int $storagePerProject) : self
    {
        $this->storagePerProject = $storagePerProject;
        return $this;
    }
    /**
     * The audit log forward endpoint
     *
     * @return string|null
     */
    public function getAuditLogForwardEndpoint() : ?string
    {
        return $this->auditLogForwardEndpoint;
    }
    /**
     * The audit log forward endpoint
     *
     * @param string|null $auditLogForwardEndpoint
     *
     * @return self
     */
    public function setAuditLogForwardEndpoint(?string $auditLogForwardEndpoint) : self
    {
        $this->auditLogForwardEndpoint = $auditLogForwardEndpoint;
        return $this;
    }
    /**
     * Skip audit log database
     *
     * @return bool|null
     */
    public function getSkipAuditLogDatabase() : ?bool
    {
        return $this->skipAuditLogDatabase;
    }
    /**
     * Skip audit log database
     *
     * @param bool|null $skipAuditLogDatabase
     *
     * @return self
     */
    public function setSkipAuditLogDatabase(?bool $skipAuditLogDatabase) : self
    {
        $this->skipAuditLogDatabase = $skipAuditLogDatabase;
        return $this;
    }
    /**
     * The session timeout for harbor, in minutes.
     *
     * @return int|null
     */
    public function getSessionTimeout() : ?int
    {
        return $this->sessionTimeout;
    }
    /**
     * The session timeout for harbor, in minutes.
     *
     * @param int|null $sessionTimeout
     *
     * @return self
     */
    public function setSessionTimeout(?int $sessionTimeout) : self
    {
        $this->sessionTimeout = $sessionTimeout;
        return $this;
    }
    /**
     * Whether or not to skip update pull time for scanner
     *
     * @return bool|null
     */
    public function getScannerSkipUpdatePulltime() : ?bool
    {
        return $this->scannerSkipUpdatePulltime;
    }
    /**
     * Whether or not to skip update pull time for scanner
     *
     * @param bool|null $scannerSkipUpdatePulltime
     *
     * @return self
     */
    public function setScannerSkipUpdatePulltime(?bool $scannerSkipUpdatePulltime) : self
    {
        $this->scannerSkipUpdatePulltime = $scannerSkipUpdatePulltime;
        return $this;
    }
    /**
     * The banner message for the UI.It is the stringified result of the banner message object
     *
     * @return string|null
     */
    public function getBannerMessage() : ?string
    {
        return $this->bannerMessage;
    }
    /**
     * The banner message for the UI.It is the stringified result of the banner message object
     *
     * @param string|null $bannerMessage
     *
     * @return self
     */
    public function setBannerMessage(?string $bannerMessage) : self
    {
        $this->bannerMessage = $bannerMessage;
        return $this;
    }
}