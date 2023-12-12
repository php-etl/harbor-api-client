<?php

namespace Gyroscops\Harbor\Api\Model;

class ProjectMetadata
{
    /**
     * The public status of the project. The valid values are "true", "false".
     *
     * @var string|null
     */
    protected $public;
    /**
     * Whether content trust is enabled or not. If it is enabled, user can't pull unsigned images from this project. The valid values are "true", "false".
     *
     * @var string|null
     */
    protected $enableContentTrust;
    /**
     * Whether cosign content trust is enabled or not. If it is enabled, user can't pull images without cosign signature from this project. The valid values are "true", "false".
     *
     * @var string|null
     */
    protected $enableContentTrustCosign;
    /**
     * Whether prevent the vulnerable images from running. The valid values are "true", "false".
     *
     * @var string|null
     */
    protected $preventVul;
    /**
     * If the vulnerability is high than severity defined here, the images can't be pulled. The valid values are "none", "low", "medium", "high", "critical".
     *
     * @var string|null
     */
    protected $severity;
    /**
     * Whether scan images automatically when pushing. The valid values are "true", "false".
     *
     * @var string|null
     */
    protected $autoScan;
    /**
     * Whether this project reuse the system level CVE allowlist as the allowlist of its own.  The valid values are "true", "false". If it is set to "true" the actual allowlist associate with this project, if any, will be ignored.
     *
     * @var string|null
     */
    protected $reuseSysCveAllowlist;
    /**
     * The ID of the tag retention policy for the project
     *
     * @var string|null
     */
    protected $retentionId;
    /**
     * The public status of the project. The valid values are "true", "false".
     *
     * @return string|null
     */
    public function getPublic() : ?string
    {
        return $this->public;
    }
    /**
     * The public status of the project. The valid values are "true", "false".
     *
     * @param string|null $public
     *
     * @return self
     */
    public function setPublic(?string $public) : self
    {
        $this->public = $public;
        return $this;
    }
    /**
     * Whether content trust is enabled or not. If it is enabled, user can't pull unsigned images from this project. The valid values are "true", "false".
     *
     * @return string|null
     */
    public function getEnableContentTrust() : ?string
    {
        return $this->enableContentTrust;
    }
    /**
     * Whether content trust is enabled or not. If it is enabled, user can't pull unsigned images from this project. The valid values are "true", "false".
     *
     * @param string|null $enableContentTrust
     *
     * @return self
     */
    public function setEnableContentTrust(?string $enableContentTrust) : self
    {
        $this->enableContentTrust = $enableContentTrust;
        return $this;
    }
    /**
     * Whether cosign content trust is enabled or not. If it is enabled, user can't pull images without cosign signature from this project. The valid values are "true", "false".
     *
     * @return string|null
     */
    public function getEnableContentTrustCosign() : ?string
    {
        return $this->enableContentTrustCosign;
    }
    /**
     * Whether cosign content trust is enabled or not. If it is enabled, user can't pull images without cosign signature from this project. The valid values are "true", "false".
     *
     * @param string|null $enableContentTrustCosign
     *
     * @return self
     */
    public function setEnableContentTrustCosign(?string $enableContentTrustCosign) : self
    {
        $this->enableContentTrustCosign = $enableContentTrustCosign;
        return $this;
    }
    /**
     * Whether prevent the vulnerable images from running. The valid values are "true", "false".
     *
     * @return string|null
     */
    public function getPreventVul() : ?string
    {
        return $this->preventVul;
    }
    /**
     * Whether prevent the vulnerable images from running. The valid values are "true", "false".
     *
     * @param string|null $preventVul
     *
     * @return self
     */
    public function setPreventVul(?string $preventVul) : self
    {
        $this->preventVul = $preventVul;
        return $this;
    }
    /**
     * If the vulnerability is high than severity defined here, the images can't be pulled. The valid values are "none", "low", "medium", "high", "critical".
     *
     * @return string|null
     */
    public function getSeverity() : ?string
    {
        return $this->severity;
    }
    /**
     * If the vulnerability is high than severity defined here, the images can't be pulled. The valid values are "none", "low", "medium", "high", "critical".
     *
     * @param string|null $severity
     *
     * @return self
     */
    public function setSeverity(?string $severity) : self
    {
        $this->severity = $severity;
        return $this;
    }
    /**
     * Whether scan images automatically when pushing. The valid values are "true", "false".
     *
     * @return string|null
     */
    public function getAutoScan() : ?string
    {
        return $this->autoScan;
    }
    /**
     * Whether scan images automatically when pushing. The valid values are "true", "false".
     *
     * @param string|null $autoScan
     *
     * @return self
     */
    public function setAutoScan(?string $autoScan) : self
    {
        $this->autoScan = $autoScan;
        return $this;
    }
    /**
     * Whether this project reuse the system level CVE allowlist as the allowlist of its own.  The valid values are "true", "false". If it is set to "true" the actual allowlist associate with this project, if any, will be ignored.
     *
     * @return string|null
     */
    public function getReuseSysCveAllowlist() : ?string
    {
        return $this->reuseSysCveAllowlist;
    }
    /**
     * Whether this project reuse the system level CVE allowlist as the allowlist of its own.  The valid values are "true", "false". If it is set to "true" the actual allowlist associate with this project, if any, will be ignored.
     *
     * @param string|null $reuseSysCveAllowlist
     *
     * @return self
     */
    public function setReuseSysCveAllowlist(?string $reuseSysCveAllowlist) : self
    {
        $this->reuseSysCveAllowlist = $reuseSysCveAllowlist;
        return $this;
    }
    /**
     * The ID of the tag retention policy for the project
     *
     * @return string|null
     */
    public function getRetentionId() : ?string
    {
        return $this->retentionId;
    }
    /**
     * The ID of the tag retention policy for the project
     *
     * @param string|null $retentionId
     *
     * @return self
     */
    public function setRetentionId(?string $retentionId) : self
    {
        $this->retentionId = $retentionId;
        return $this;
    }
}