<?php

namespace Gyroscops\Harbor\Api\Model;

class ConfigurationsResponse
{
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
    protected $primaryAuthMode;
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
     * @var StringConfigItem|null
     */
    protected $ldapGroupBaseDn;
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
    protected $ldapGroupAttributeName;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $ldapGroupSearchFilter;
    /**
     * 
     *
     * @var IntegerConfigItem|null
     */
    protected $ldapGroupSearchScope;
    /**
     * 
     *
     * @var IntegerConfigItem|null
     */
    protected $ldapScope;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $ldapSearchDn;
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
    protected $ldapUid;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $ldapUrl;
    /**
     * 
     *
     * @var BoolConfigItem|null
     */
    protected $ldapVerifyCert;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $ldapGroupMembershipAttribute;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $projectCreationRestriction;
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
    protected $selfRegistration;
    /**
     * 
     *
     * @var IntegerConfigItem|null
     */
    protected $tokenExpiration;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $uaaClientId;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $uaaClientSecret;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $uaaEndpoint;
    /**
     * 
     *
     * @var BoolConfigItem|null
     */
    protected $uaaVerifyCert;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $httpAuthproxyEndpoint;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $httpAuthproxyTokenreviewEndpoint;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $httpAuthproxyAdminGroups;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $httpAuthproxyAdminUsernames;
    /**
     * 
     *
     * @var BoolConfigItem|null
     */
    protected $httpAuthproxyVerifyCert;
    /**
     * 
     *
     * @var BoolConfigItem|null
     */
    protected $httpAuthproxySkipSearch;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $httpAuthproxyServerCertificate;
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
    protected $oidcEndpoint;
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
    protected $oidcGroupsClaim;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $oidcAdminGroup;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $oidcGroupFilter;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $oidcScope;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $oidcUserClaim;
    /**
     * 
     *
     * @var BoolConfigItem|null
     */
    protected $oidcVerifyCert;
    /**
     * 
     *
     * @var BoolConfigItem|null
     */
    protected $oidcAutoOnboard;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $oidcExtraRedirectParms;
    /**
     * 
     *
     * @var IntegerConfigItem|null
     */
    protected $robotTokenDuration;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $robotNamePrefix;
    /**
     * 
     *
     * @var BoolConfigItem|null
     */
    protected $notificationEnable;
    /**
     * 
     *
     * @var BoolConfigItem|null
     */
    protected $quotaPerProjectEnable;
    /**
     * 
     *
     * @var IntegerConfigItem|null
     */
    protected $storagePerProject;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $auditLogForwardEndpoint;
    /**
     * 
     *
     * @var BoolConfigItem|null
     */
    protected $skipAuditLogDatabase;
    /**
     * 
     *
     * @var BoolConfigItem|null
     */
    protected $scannerSkipUpdatePulltime;
    /**
     * 
     *
     * @var ConfigurationsResponseScanAllPolicy|null
     */
    protected $scanAllPolicy;
    /**
     * 
     *
     * @var IntegerConfigItem|null
     */
    protected $sessionTimeout;
    /**
     * 
     *
     * @var StringConfigItem|null
     */
    protected $bannerMessage;
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getAuthMode() : ?StringConfigItem
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
    public function setAuthMode(?StringConfigItem $authMode) : self
    {
        $this->authMode = $authMode;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getPrimaryAuthMode() : ?BoolConfigItem
    {
        return $this->primaryAuthMode;
    }
    /**
     * 
     *
     * @param BoolConfigItem|null $primaryAuthMode
     *
     * @return self
     */
    public function setPrimaryAuthMode(?BoolConfigItem $primaryAuthMode) : self
    {
        $this->primaryAuthMode = $primaryAuthMode;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getLdapBaseDn() : ?StringConfigItem
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
    public function setLdapBaseDn(?StringConfigItem $ldapBaseDn) : self
    {
        $this->ldapBaseDn = $ldapBaseDn;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getLdapFilter() : ?StringConfigItem
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
    public function setLdapFilter(?StringConfigItem $ldapFilter) : self
    {
        $this->ldapFilter = $ldapFilter;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getLdapGroupBaseDn() : ?StringConfigItem
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
    public function setLdapGroupBaseDn(?StringConfigItem $ldapGroupBaseDn) : self
    {
        $this->ldapGroupBaseDn = $ldapGroupBaseDn;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getLdapGroupAdminDn() : ?StringConfigItem
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
    public function setLdapGroupAdminDn(?StringConfigItem $ldapGroupAdminDn) : self
    {
        $this->ldapGroupAdminDn = $ldapGroupAdminDn;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getLdapGroupAttributeName() : ?StringConfigItem
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
    public function setLdapGroupAttributeName(?StringConfigItem $ldapGroupAttributeName) : self
    {
        $this->ldapGroupAttributeName = $ldapGroupAttributeName;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getLdapGroupSearchFilter() : ?StringConfigItem
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
    public function setLdapGroupSearchFilter(?StringConfigItem $ldapGroupSearchFilter) : self
    {
        $this->ldapGroupSearchFilter = $ldapGroupSearchFilter;
        return $this;
    }
    /**
     * 
     *
     * @return IntegerConfigItem|null
     */
    public function getLdapGroupSearchScope() : ?IntegerConfigItem
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
    public function setLdapGroupSearchScope(?IntegerConfigItem $ldapGroupSearchScope) : self
    {
        $this->ldapGroupSearchScope = $ldapGroupSearchScope;
        return $this;
    }
    /**
     * 
     *
     * @return IntegerConfigItem|null
     */
    public function getLdapScope() : ?IntegerConfigItem
    {
        return $this->ldapScope;
    }
    /**
     * 
     *
     * @param IntegerConfigItem|null $ldapScope
     *
     * @return self
     */
    public function setLdapScope(?IntegerConfigItem $ldapScope) : self
    {
        $this->ldapScope = $ldapScope;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getLdapSearchDn() : ?StringConfigItem
    {
        return $this->ldapSearchDn;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $ldapSearchDn
     *
     * @return self
     */
    public function setLdapSearchDn(?StringConfigItem $ldapSearchDn) : self
    {
        $this->ldapSearchDn = $ldapSearchDn;
        return $this;
    }
    /**
     * 
     *
     * @return IntegerConfigItem|null
     */
    public function getLdapTimeout() : ?IntegerConfigItem
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
    public function setLdapTimeout(?IntegerConfigItem $ldapTimeout) : self
    {
        $this->ldapTimeout = $ldapTimeout;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getLdapUid() : ?StringConfigItem
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
    public function setLdapUid(?StringConfigItem $ldapUid) : self
    {
        $this->ldapUid = $ldapUid;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getLdapUrl() : ?StringConfigItem
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
    public function setLdapUrl(?StringConfigItem $ldapUrl) : self
    {
        $this->ldapUrl = $ldapUrl;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getLdapVerifyCert() : ?BoolConfigItem
    {
        return $this->ldapVerifyCert;
    }
    /**
     * 
     *
     * @param BoolConfigItem|null $ldapVerifyCert
     *
     * @return self
     */
    public function setLdapVerifyCert(?BoolConfigItem $ldapVerifyCert) : self
    {
        $this->ldapVerifyCert = $ldapVerifyCert;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getLdapGroupMembershipAttribute() : ?StringConfigItem
    {
        return $this->ldapGroupMembershipAttribute;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $ldapGroupMembershipAttribute
     *
     * @return self
     */
    public function setLdapGroupMembershipAttribute(?StringConfigItem $ldapGroupMembershipAttribute) : self
    {
        $this->ldapGroupMembershipAttribute = $ldapGroupMembershipAttribute;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getProjectCreationRestriction() : ?StringConfigItem
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
    public function setProjectCreationRestriction(?StringConfigItem $projectCreationRestriction) : self
    {
        $this->projectCreationRestriction = $projectCreationRestriction;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getReadOnly() : ?BoolConfigItem
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
    public function setReadOnly(?BoolConfigItem $readOnly) : self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getSelfRegistration() : ?BoolConfigItem
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
    public function setSelfRegistration(?BoolConfigItem $selfRegistration) : self
    {
        $this->selfRegistration = $selfRegistration;
        return $this;
    }
    /**
     * 
     *
     * @return IntegerConfigItem|null
     */
    public function getTokenExpiration() : ?IntegerConfigItem
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
    public function setTokenExpiration(?IntegerConfigItem $tokenExpiration) : self
    {
        $this->tokenExpiration = $tokenExpiration;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getUaaClientId() : ?StringConfigItem
    {
        return $this->uaaClientId;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $uaaClientId
     *
     * @return self
     */
    public function setUaaClientId(?StringConfigItem $uaaClientId) : self
    {
        $this->uaaClientId = $uaaClientId;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getUaaClientSecret() : ?StringConfigItem
    {
        return $this->uaaClientSecret;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $uaaClientSecret
     *
     * @return self
     */
    public function setUaaClientSecret(?StringConfigItem $uaaClientSecret) : self
    {
        $this->uaaClientSecret = $uaaClientSecret;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getUaaEndpoint() : ?StringConfigItem
    {
        return $this->uaaEndpoint;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $uaaEndpoint
     *
     * @return self
     */
    public function setUaaEndpoint(?StringConfigItem $uaaEndpoint) : self
    {
        $this->uaaEndpoint = $uaaEndpoint;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getUaaVerifyCert() : ?BoolConfigItem
    {
        return $this->uaaVerifyCert;
    }
    /**
     * 
     *
     * @param BoolConfigItem|null $uaaVerifyCert
     *
     * @return self
     */
    public function setUaaVerifyCert(?BoolConfigItem $uaaVerifyCert) : self
    {
        $this->uaaVerifyCert = $uaaVerifyCert;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getHttpAuthproxyEndpoint() : ?StringConfigItem
    {
        return $this->httpAuthproxyEndpoint;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $httpAuthproxyEndpoint
     *
     * @return self
     */
    public function setHttpAuthproxyEndpoint(?StringConfigItem $httpAuthproxyEndpoint) : self
    {
        $this->httpAuthproxyEndpoint = $httpAuthproxyEndpoint;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getHttpAuthproxyTokenreviewEndpoint() : ?StringConfigItem
    {
        return $this->httpAuthproxyTokenreviewEndpoint;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $httpAuthproxyTokenreviewEndpoint
     *
     * @return self
     */
    public function setHttpAuthproxyTokenreviewEndpoint(?StringConfigItem $httpAuthproxyTokenreviewEndpoint) : self
    {
        $this->httpAuthproxyTokenreviewEndpoint = $httpAuthproxyTokenreviewEndpoint;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getHttpAuthproxyAdminGroups() : ?StringConfigItem
    {
        return $this->httpAuthproxyAdminGroups;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $httpAuthproxyAdminGroups
     *
     * @return self
     */
    public function setHttpAuthproxyAdminGroups(?StringConfigItem $httpAuthproxyAdminGroups) : self
    {
        $this->httpAuthproxyAdminGroups = $httpAuthproxyAdminGroups;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getHttpAuthproxyAdminUsernames() : ?StringConfigItem
    {
        return $this->httpAuthproxyAdminUsernames;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $httpAuthproxyAdminUsernames
     *
     * @return self
     */
    public function setHttpAuthproxyAdminUsernames(?StringConfigItem $httpAuthproxyAdminUsernames) : self
    {
        $this->httpAuthproxyAdminUsernames = $httpAuthproxyAdminUsernames;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getHttpAuthproxyVerifyCert() : ?BoolConfigItem
    {
        return $this->httpAuthproxyVerifyCert;
    }
    /**
     * 
     *
     * @param BoolConfigItem|null $httpAuthproxyVerifyCert
     *
     * @return self
     */
    public function setHttpAuthproxyVerifyCert(?BoolConfigItem $httpAuthproxyVerifyCert) : self
    {
        $this->httpAuthproxyVerifyCert = $httpAuthproxyVerifyCert;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getHttpAuthproxySkipSearch() : ?BoolConfigItem
    {
        return $this->httpAuthproxySkipSearch;
    }
    /**
     * 
     *
     * @param BoolConfigItem|null $httpAuthproxySkipSearch
     *
     * @return self
     */
    public function setHttpAuthproxySkipSearch(?BoolConfigItem $httpAuthproxySkipSearch) : self
    {
        $this->httpAuthproxySkipSearch = $httpAuthproxySkipSearch;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getHttpAuthproxyServerCertificate() : ?StringConfigItem
    {
        return $this->httpAuthproxyServerCertificate;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $httpAuthproxyServerCertificate
     *
     * @return self
     */
    public function setHttpAuthproxyServerCertificate(?StringConfigItem $httpAuthproxyServerCertificate) : self
    {
        $this->httpAuthproxyServerCertificate = $httpAuthproxyServerCertificate;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getOidcName() : ?StringConfigItem
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
    public function setOidcName(?StringConfigItem $oidcName) : self
    {
        $this->oidcName = $oidcName;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getOidcEndpoint() : ?StringConfigItem
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
    public function setOidcEndpoint(?StringConfigItem $oidcEndpoint) : self
    {
        $this->oidcEndpoint = $oidcEndpoint;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getOidcClientId() : ?StringConfigItem
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
    public function setOidcClientId(?StringConfigItem $oidcClientId) : self
    {
        $this->oidcClientId = $oidcClientId;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getOidcGroupsClaim() : ?StringConfigItem
    {
        return $this->oidcGroupsClaim;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $oidcGroupsClaim
     *
     * @return self
     */
    public function setOidcGroupsClaim(?StringConfigItem $oidcGroupsClaim) : self
    {
        $this->oidcGroupsClaim = $oidcGroupsClaim;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getOidcAdminGroup() : ?StringConfigItem
    {
        return $this->oidcAdminGroup;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $oidcAdminGroup
     *
     * @return self
     */
    public function setOidcAdminGroup(?StringConfigItem $oidcAdminGroup) : self
    {
        $this->oidcAdminGroup = $oidcAdminGroup;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getOidcGroupFilter() : ?StringConfigItem
    {
        return $this->oidcGroupFilter;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $oidcGroupFilter
     *
     * @return self
     */
    public function setOidcGroupFilter(?StringConfigItem $oidcGroupFilter) : self
    {
        $this->oidcGroupFilter = $oidcGroupFilter;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getOidcScope() : ?StringConfigItem
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
    public function setOidcScope(?StringConfigItem $oidcScope) : self
    {
        $this->oidcScope = $oidcScope;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getOidcUserClaim() : ?StringConfigItem
    {
        return $this->oidcUserClaim;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $oidcUserClaim
     *
     * @return self
     */
    public function setOidcUserClaim(?StringConfigItem $oidcUserClaim) : self
    {
        $this->oidcUserClaim = $oidcUserClaim;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getOidcVerifyCert() : ?BoolConfigItem
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
    public function setOidcVerifyCert(?BoolConfigItem $oidcVerifyCert) : self
    {
        $this->oidcVerifyCert = $oidcVerifyCert;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getOidcAutoOnboard() : ?BoolConfigItem
    {
        return $this->oidcAutoOnboard;
    }
    /**
     * 
     *
     * @param BoolConfigItem|null $oidcAutoOnboard
     *
     * @return self
     */
    public function setOidcAutoOnboard(?BoolConfigItem $oidcAutoOnboard) : self
    {
        $this->oidcAutoOnboard = $oidcAutoOnboard;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getOidcExtraRedirectParms() : ?StringConfigItem
    {
        return $this->oidcExtraRedirectParms;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $oidcExtraRedirectParms
     *
     * @return self
     */
    public function setOidcExtraRedirectParms(?StringConfigItem $oidcExtraRedirectParms) : self
    {
        $this->oidcExtraRedirectParms = $oidcExtraRedirectParms;
        return $this;
    }
    /**
     * 
     *
     * @return IntegerConfigItem|null
     */
    public function getRobotTokenDuration() : ?IntegerConfigItem
    {
        return $this->robotTokenDuration;
    }
    /**
     * 
     *
     * @param IntegerConfigItem|null $robotTokenDuration
     *
     * @return self
     */
    public function setRobotTokenDuration(?IntegerConfigItem $robotTokenDuration) : self
    {
        $this->robotTokenDuration = $robotTokenDuration;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getRobotNamePrefix() : ?StringConfigItem
    {
        return $this->robotNamePrefix;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $robotNamePrefix
     *
     * @return self
     */
    public function setRobotNamePrefix(?StringConfigItem $robotNamePrefix) : self
    {
        $this->robotNamePrefix = $robotNamePrefix;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getNotificationEnable() : ?BoolConfigItem
    {
        return $this->notificationEnable;
    }
    /**
     * 
     *
     * @param BoolConfigItem|null $notificationEnable
     *
     * @return self
     */
    public function setNotificationEnable(?BoolConfigItem $notificationEnable) : self
    {
        $this->notificationEnable = $notificationEnable;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getQuotaPerProjectEnable() : ?BoolConfigItem
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
    public function setQuotaPerProjectEnable(?BoolConfigItem $quotaPerProjectEnable) : self
    {
        $this->quotaPerProjectEnable = $quotaPerProjectEnable;
        return $this;
    }
    /**
     * 
     *
     * @return IntegerConfigItem|null
     */
    public function getStoragePerProject() : ?IntegerConfigItem
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
    public function setStoragePerProject(?IntegerConfigItem $storagePerProject) : self
    {
        $this->storagePerProject = $storagePerProject;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getAuditLogForwardEndpoint() : ?StringConfigItem
    {
        return $this->auditLogForwardEndpoint;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $auditLogForwardEndpoint
     *
     * @return self
     */
    public function setAuditLogForwardEndpoint(?StringConfigItem $auditLogForwardEndpoint) : self
    {
        $this->auditLogForwardEndpoint = $auditLogForwardEndpoint;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getSkipAuditLogDatabase() : ?BoolConfigItem
    {
        return $this->skipAuditLogDatabase;
    }
    /**
     * 
     *
     * @param BoolConfigItem|null $skipAuditLogDatabase
     *
     * @return self
     */
    public function setSkipAuditLogDatabase(?BoolConfigItem $skipAuditLogDatabase) : self
    {
        $this->skipAuditLogDatabase = $skipAuditLogDatabase;
        return $this;
    }
    /**
     * 
     *
     * @return BoolConfigItem|null
     */
    public function getScannerSkipUpdatePulltime() : ?BoolConfigItem
    {
        return $this->scannerSkipUpdatePulltime;
    }
    /**
     * 
     *
     * @param BoolConfigItem|null $scannerSkipUpdatePulltime
     *
     * @return self
     */
    public function setScannerSkipUpdatePulltime(?BoolConfigItem $scannerSkipUpdatePulltime) : self
    {
        $this->scannerSkipUpdatePulltime = $scannerSkipUpdatePulltime;
        return $this;
    }
    /**
     * 
     *
     * @return ConfigurationsResponseScanAllPolicy|null
     */
    public function getScanAllPolicy() : ?ConfigurationsResponseScanAllPolicy
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
    public function setScanAllPolicy(?ConfigurationsResponseScanAllPolicy $scanAllPolicy) : self
    {
        $this->scanAllPolicy = $scanAllPolicy;
        return $this;
    }
    /**
     * 
     *
     * @return IntegerConfigItem|null
     */
    public function getSessionTimeout() : ?IntegerConfigItem
    {
        return $this->sessionTimeout;
    }
    /**
     * 
     *
     * @param IntegerConfigItem|null $sessionTimeout
     *
     * @return self
     */
    public function setSessionTimeout(?IntegerConfigItem $sessionTimeout) : self
    {
        $this->sessionTimeout = $sessionTimeout;
        return $this;
    }
    /**
     * 
     *
     * @return StringConfigItem|null
     */
    public function getBannerMessage() : ?StringConfigItem
    {
        return $this->bannerMessage;
    }
    /**
     * 
     *
     * @param StringConfigItem|null $bannerMessage
     *
     * @return self
     */
    public function setBannerMessage(?StringConfigItem $bannerMessage) : self
    {
        $this->bannerMessage = $bannerMessage;
        return $this;
    }
}