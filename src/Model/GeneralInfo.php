<?php

namespace Gyroscops\Harbor\Api\Model;

class GeneralInfo
{
    /**
     * The banner message for the UI. It is the stringified result of the banner message object.
     *
     * @var string|null
     */
    protected $bannerMessage;
    /**
     * The current time of the server.
     *
     * @var \DateTime|null
     */
    protected $currentTime;
    /**
     * The url of registry against which the docker command should be issued.
     *
     * @var string|null
     */
    protected $registryUrl;
    /**
     * The external URL of Harbor, with protocol.
     *
     * @var string|null
     */
    protected $externalUrl;
    /**
     * The auth mode of current Harbor instance.
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
     * Indicate who can create projects, it could be 'adminonly' or 'everyone'.
     *
     * @var string|null
     */
    protected $projectCreationRestriction;
    /**
     * Indicate whether the Harbor instance enable user to register himself.
     *
     * @var bool|null
     */
    protected $selfRegistration;
    /**
     * Indicate whether there is a ca root cert file ready for download in the file system.
     *
     * @var bool|null
     */
    protected $hasCaRoot;
    /**
     * The build version of Harbor.
     *
     * @var string|null
     */
    protected $harborVersion;
    /**
     * The storage provider's name of Harbor registry
     *
     * @var string|null
     */
    protected $registryStorageProviderName;
    /**
     * The flag to indicate whether Harbor is in readonly mode.
     *
     * @var bool|null
     */
    protected $readOnly;
    /**
     * The flag to indicate whether notification mechanism is enabled on Harbor instance.
     *
     * @var bool|null
     */
    protected $notificationEnable;
    /**
     * 
     *
     * @var AuthproxySetting|null
     */
    protected $authproxySettings;
    /**
     * The OIDC provider name, empty if current auth is not OIDC_auth or OIDC provider is not configured.
     *
     * @var string|null
     */
    protected $oidcProviderName;
    /**
     * The banner message for the UI. It is the stringified result of the banner message object.
     *
     * @return string|null
     */
    public function getBannerMessage() : ?string
    {
        return $this->bannerMessage;
    }
    /**
     * The banner message for the UI. It is the stringified result of the banner message object.
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
    /**
     * The current time of the server.
     *
     * @return \DateTime|null
     */
    public function getCurrentTime() : ?\DateTime
    {
        return $this->currentTime;
    }
    /**
     * The current time of the server.
     *
     * @param \DateTime|null $currentTime
     *
     * @return self
     */
    public function setCurrentTime(?\DateTime $currentTime) : self
    {
        $this->currentTime = $currentTime;
        return $this;
    }
    /**
     * The url of registry against which the docker command should be issued.
     *
     * @return string|null
     */
    public function getRegistryUrl() : ?string
    {
        return $this->registryUrl;
    }
    /**
     * The url of registry against which the docker command should be issued.
     *
     * @param string|null $registryUrl
     *
     * @return self
     */
    public function setRegistryUrl(?string $registryUrl) : self
    {
        $this->registryUrl = $registryUrl;
        return $this;
    }
    /**
     * The external URL of Harbor, with protocol.
     *
     * @return string|null
     */
    public function getExternalUrl() : ?string
    {
        return $this->externalUrl;
    }
    /**
     * The external URL of Harbor, with protocol.
     *
     * @param string|null $externalUrl
     *
     * @return self
     */
    public function setExternalUrl(?string $externalUrl) : self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }
    /**
     * The auth mode of current Harbor instance.
     *
     * @return string|null
     */
    public function getAuthMode() : ?string
    {
        return $this->authMode;
    }
    /**
     * The auth mode of current Harbor instance.
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
     * Indicate who can create projects, it could be 'adminonly' or 'everyone'.
     *
     * @return string|null
     */
    public function getProjectCreationRestriction() : ?string
    {
        return $this->projectCreationRestriction;
    }
    /**
     * Indicate who can create projects, it could be 'adminonly' or 'everyone'.
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
     * Indicate whether the Harbor instance enable user to register himself.
     *
     * @return bool|null
     */
    public function getSelfRegistration() : ?bool
    {
        return $this->selfRegistration;
    }
    /**
     * Indicate whether the Harbor instance enable user to register himself.
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
     * Indicate whether there is a ca root cert file ready for download in the file system.
     *
     * @return bool|null
     */
    public function getHasCaRoot() : ?bool
    {
        return $this->hasCaRoot;
    }
    /**
     * Indicate whether there is a ca root cert file ready for download in the file system.
     *
     * @param bool|null $hasCaRoot
     *
     * @return self
     */
    public function setHasCaRoot(?bool $hasCaRoot) : self
    {
        $this->hasCaRoot = $hasCaRoot;
        return $this;
    }
    /**
     * The build version of Harbor.
     *
     * @return string|null
     */
    public function getHarborVersion() : ?string
    {
        return $this->harborVersion;
    }
    /**
     * The build version of Harbor.
     *
     * @param string|null $harborVersion
     *
     * @return self
     */
    public function setHarborVersion(?string $harborVersion) : self
    {
        $this->harborVersion = $harborVersion;
        return $this;
    }
    /**
     * The storage provider's name of Harbor registry
     *
     * @return string|null
     */
    public function getRegistryStorageProviderName() : ?string
    {
        return $this->registryStorageProviderName;
    }
    /**
     * The storage provider's name of Harbor registry
     *
     * @param string|null $registryStorageProviderName
     *
     * @return self
     */
    public function setRegistryStorageProviderName(?string $registryStorageProviderName) : self
    {
        $this->registryStorageProviderName = $registryStorageProviderName;
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
     * The flag to indicate whether notification mechanism is enabled on Harbor instance.
     *
     * @return bool|null
     */
    public function getNotificationEnable() : ?bool
    {
        return $this->notificationEnable;
    }
    /**
     * The flag to indicate whether notification mechanism is enabled on Harbor instance.
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
     * 
     *
     * @return AuthproxySetting|null
     */
    public function getAuthproxySettings() : ?AuthproxySetting
    {
        return $this->authproxySettings;
    }
    /**
     * 
     *
     * @param AuthproxySetting|null $authproxySettings
     *
     * @return self
     */
    public function setAuthproxySettings(?AuthproxySetting $authproxySettings) : self
    {
        $this->authproxySettings = $authproxySettings;
        return $this;
    }
    /**
     * The OIDC provider name, empty if current auth is not OIDC_auth or OIDC provider is not configured.
     *
     * @return string|null
     */
    public function getOidcProviderName() : ?string
    {
        return $this->oidcProviderName;
    }
    /**
     * The OIDC provider name, empty if current auth is not OIDC_auth or OIDC provider is not configured.
     *
     * @param string|null $oidcProviderName
     *
     * @return self
     */
    public function setOidcProviderName(?string $oidcProviderName) : self
    {
        $this->oidcProviderName = $oidcProviderName;
        return $this;
    }
}