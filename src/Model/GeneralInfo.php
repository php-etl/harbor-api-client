<?php

namespace Gyroscops\Harbor\Api\Model;

class GeneralInfo
{
    /**
     * The build version of Harbor.
     *
     * @var string
     */
    protected $harborVersion;
    /**
     * The auth mode of current Harbor instance.
     *
     * @var string
     */
    protected $authMode;
    /**
     * Indicate whether the Harbor instance enable user to register himself.
     *
     * @var bool
     */
    protected $selfRegistration;
    /**
     * The external URL of Harbor, with protocol.
     *
     * @var string
     */
    protected $externalUrl;
    /**
     * Indicate who can create projects, it could be 'adminonly' or 'everyone'.
     *
     * @var string
     */
    protected $projectCreationRestriction;
    /**
     * Indicate whether there is a ca root cert file ready for download in the file system.
     *
     * @var bool
     */
    protected $hasCaRoot;
    /**
     * If the Harbor instance is deployed with nested notary.
     *
     * @var bool
     */
    protected $withNotary;
    /**
     * If the Harbor instance is deployed with nested chartmuseum.
     *
     * @var bool
     */
    protected $withChartmuseum;
    /**
     * The url of registry against which the docker command should be issued.
     *
     * @var string
     */
    protected $registryUrl;
    /**
     * The build version of Harbor.
     *
     * @return string
     */
    public function getHarborVersion() : string
    {
        return $this->harborVersion;
    }
    /**
     * The build version of Harbor.
     *
     * @param string $harborVersion
     *
     * @return self
     */
    public function setHarborVersion(string $harborVersion) : self
    {
        $this->harborVersion = $harborVersion;
        return $this;
    }
    /**
     * The auth mode of current Harbor instance.
     *
     * @return string
     */
    public function getAuthMode() : string
    {
        return $this->authMode;
    }
    /**
     * The auth mode of current Harbor instance.
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
     * Indicate whether the Harbor instance enable user to register himself.
     *
     * @return bool
     */
    public function getSelfRegistration() : bool
    {
        return $this->selfRegistration;
    }
    /**
     * Indicate whether the Harbor instance enable user to register himself.
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
     * The external URL of Harbor, with protocol.
     *
     * @return string
     */
    public function getExternalUrl() : string
    {
        return $this->externalUrl;
    }
    /**
     * The external URL of Harbor, with protocol.
     *
     * @param string $externalUrl
     *
     * @return self
     */
    public function setExternalUrl(string $externalUrl) : self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }
    /**
     * Indicate who can create projects, it could be 'adminonly' or 'everyone'.
     *
     * @return string
     */
    public function getProjectCreationRestriction() : string
    {
        return $this->projectCreationRestriction;
    }
    /**
     * Indicate who can create projects, it could be 'adminonly' or 'everyone'.
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
     * Indicate whether there is a ca root cert file ready for download in the file system.
     *
     * @return bool
     */
    public function getHasCaRoot() : bool
    {
        return $this->hasCaRoot;
    }
    /**
     * Indicate whether there is a ca root cert file ready for download in the file system.
     *
     * @param bool $hasCaRoot
     *
     * @return self
     */
    public function setHasCaRoot(bool $hasCaRoot) : self
    {
        $this->hasCaRoot = $hasCaRoot;
        return $this;
    }
    /**
     * If the Harbor instance is deployed with nested notary.
     *
     * @return bool
     */
    public function getWithNotary() : bool
    {
        return $this->withNotary;
    }
    /**
     * If the Harbor instance is deployed with nested notary.
     *
     * @param bool $withNotary
     *
     * @return self
     */
    public function setWithNotary(bool $withNotary) : self
    {
        $this->withNotary = $withNotary;
        return $this;
    }
    /**
     * If the Harbor instance is deployed with nested chartmuseum.
     *
     * @return bool
     */
    public function getWithChartmuseum() : bool
    {
        return $this->withChartmuseum;
    }
    /**
     * If the Harbor instance is deployed with nested chartmuseum.
     *
     * @param bool $withChartmuseum
     *
     * @return self
     */
    public function setWithChartmuseum(bool $withChartmuseum) : self
    {
        $this->withChartmuseum = $withChartmuseum;
        return $this;
    }
    /**
     * The url of registry against which the docker command should be issued.
     *
     * @return string
     */
    public function getRegistryUrl() : string
    {
        return $this->registryUrl;
    }
    /**
     * The url of registry against which the docker command should be issued.
     *
     * @param string $registryUrl
     *
     * @return self
     */
    public function setRegistryUrl(string $registryUrl) : self
    {
        $this->registryUrl = $registryUrl;
        return $this;
    }
}