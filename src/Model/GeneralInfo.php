<?php

namespace Gyroscops\Harbor\Api\Model;

class GeneralInfo
{
    /**
     * The build version of Harbor.
     *
     * @var string|null
     */
    protected $harborVersion;
    /**
     * The auth mode of current Harbor instance.
     *
     * @var string|null
     */
    protected $authMode;
    /**
     * Indicate whether the Harbor instance enable user to register himself.
     *
     * @var bool|null
     */
    protected $selfRegistration;
    /**
     * The external URL of Harbor, with protocol.
     *
     * @var string|null
     */
    protected $externalUrl;
    /**
     * Indicate who can create projects, it could be 'adminonly' or 'everyone'.
     *
     * @var string|null
     */
    protected $projectCreationRestriction;
    /**
     * Indicate whether there is a ca root cert file ready for download in the file system.
     *
     * @var bool|null
     */
    protected $hasCaRoot;
    /**
     * If the Harbor instance is deployed with nested notary.
     *
     * @var bool|null
     */
    protected $withNotary;
    /**
     * If the Harbor instance is deployed with nested chartmuseum.
     *
     * @var bool|null
     */
    protected $withChartmuseum;
    /**
     * The url of registry against which the docker command should be issued.
     *
     * @var string|null
     */
    protected $registryUrl;
    /**
     * The build version of Harbor.
     *
     * @return string|null
     */
    public function getHarborVersion(): ?string
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
    public function setHarborVersion(?string $harborVersion): self
    {
        $this->harborVersion = $harborVersion;
        return $this;
    }
    /**
     * The auth mode of current Harbor instance.
     *
     * @return string|null
     */
    public function getAuthMode(): ?string
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
    public function setAuthMode(?string $authMode): self
    {
        $this->authMode = $authMode;
        return $this;
    }
    /**
     * Indicate whether the Harbor instance enable user to register himself.
     *
     * @return bool|null
     */
    public function getSelfRegistration(): ?bool
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
    public function setSelfRegistration(?bool $selfRegistration): self
    {
        $this->selfRegistration = $selfRegistration;
        return $this;
    }
    /**
     * The external URL of Harbor, with protocol.
     *
     * @return string|null
     */
    public function getExternalUrl(): ?string
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
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }
    /**
     * Indicate who can create projects, it could be 'adminonly' or 'everyone'.
     *
     * @return string|null
     */
    public function getProjectCreationRestriction(): ?string
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
    public function setProjectCreationRestriction(?string $projectCreationRestriction): self
    {
        $this->projectCreationRestriction = $projectCreationRestriction;
        return $this;
    }
    /**
     * Indicate whether there is a ca root cert file ready for download in the file system.
     *
     * @return bool|null
     */
    public function getHasCaRoot(): ?bool
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
    public function setHasCaRoot(?bool $hasCaRoot): self
    {
        $this->hasCaRoot = $hasCaRoot;
        return $this;
    }
    /**
     * If the Harbor instance is deployed with nested notary.
     *
     * @return bool|null
     */
    public function getWithNotary(): ?bool
    {
        return $this->withNotary;
    }
    /**
     * If the Harbor instance is deployed with nested notary.
     *
     * @param bool|null $withNotary
     *
     * @return self
     */
    public function setWithNotary(?bool $withNotary): self
    {
        $this->withNotary = $withNotary;
        return $this;
    }
    /**
     * If the Harbor instance is deployed with nested chartmuseum.
     *
     * @return bool|null
     */
    public function getWithChartmuseum(): ?bool
    {
        return $this->withChartmuseum;
    }
    /**
     * If the Harbor instance is deployed with nested chartmuseum.
     *
     * @param bool|null $withChartmuseum
     *
     * @return self
     */
    public function setWithChartmuseum(?bool $withChartmuseum): self
    {
        $this->withChartmuseum = $withChartmuseum;
        return $this;
    }
    /**
     * The url of registry against which the docker command should be issued.
     *
     * @return string|null
     */
    public function getRegistryUrl(): ?string
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
    public function setRegistryUrl(?string $registryUrl): self
    {
        $this->registryUrl = $registryUrl;
        return $this;
    }
}
