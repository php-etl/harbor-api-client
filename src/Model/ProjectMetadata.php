<?php

namespace Gyroscops\Harbor\Api\Model;

class ProjectMetadata
{
    /**
     * Whether content trust is enabled or not. If it is enabled, user can't pull unsigned images from this project. The valid values are "true", "false".
     *
     * @var string
     */
    protected $enableContentTrust;
    /**
     * Whether scan images automatically when pushing. The valid values are "true", "false".
     *
     * @var string
     */
    protected $autoScan;
    /**
     * If the vulnerability is high than severity defined here, the images can't be pulled. The valid values are "none", "low", "medium", "high", "critical".
     *
     * @var string
     */
    protected $severity;
    /**
     * Whether this project reuse the system level CVE whitelist as the whitelist of its own.  The valid values are "true", "false". If it is set to "true" the actual whitelist associate with this project, if any, will be ignored.
     *
     * @var string
     */
    protected $reuseSysCveWhitelist;
    /**
     * The public status of the project. The valid values are "true", "false".
     *
     * @var string
     */
    protected $public;
    /**
     * Whether prevent the vulnerable images from running. The valid values are "true", "false".
     *
     * @var string
     */
    protected $preventVul;
    /**
     * Whether content trust is enabled or not. If it is enabled, user can't pull unsigned images from this project. The valid values are "true", "false".
     *
     * @return string
     */
    public function getEnableContentTrust() : string
    {
        return $this->enableContentTrust;
    }
    /**
     * Whether content trust is enabled or not. If it is enabled, user can't pull unsigned images from this project. The valid values are "true", "false".
     *
     * @param string $enableContentTrust
     *
     * @return self
     */
    public function setEnableContentTrust(string $enableContentTrust) : self
    {
        $this->enableContentTrust = $enableContentTrust;
        return $this;
    }
    /**
     * Whether scan images automatically when pushing. The valid values are "true", "false".
     *
     * @return string
     */
    public function getAutoScan() : string
    {
        return $this->autoScan;
    }
    /**
     * Whether scan images automatically when pushing. The valid values are "true", "false".
     *
     * @param string $autoScan
     *
     * @return self
     */
    public function setAutoScan(string $autoScan) : self
    {
        $this->autoScan = $autoScan;
        return $this;
    }
    /**
     * If the vulnerability is high than severity defined here, the images can't be pulled. The valid values are "none", "low", "medium", "high", "critical".
     *
     * @return string
     */
    public function getSeverity() : string
    {
        return $this->severity;
    }
    /**
     * If the vulnerability is high than severity defined here, the images can't be pulled. The valid values are "none", "low", "medium", "high", "critical".
     *
     * @param string $severity
     *
     * @return self
     */
    public function setSeverity(string $severity) : self
    {
        $this->severity = $severity;
        return $this;
    }
    /**
     * Whether this project reuse the system level CVE whitelist as the whitelist of its own.  The valid values are "true", "false". If it is set to "true" the actual whitelist associate with this project, if any, will be ignored.
     *
     * @return string
     */
    public function getReuseSysCveWhitelist() : string
    {
        return $this->reuseSysCveWhitelist;
    }
    /**
     * Whether this project reuse the system level CVE whitelist as the whitelist of its own.  The valid values are "true", "false". If it is set to "true" the actual whitelist associate with this project, if any, will be ignored.
     *
     * @param string $reuseSysCveWhitelist
     *
     * @return self
     */
    public function setReuseSysCveWhitelist(string $reuseSysCveWhitelist) : self
    {
        $this->reuseSysCveWhitelist = $reuseSysCveWhitelist;
        return $this;
    }
    /**
     * The public status of the project. The valid values are "true", "false".
     *
     * @return string
     */
    public function getPublic() : string
    {
        return $this->public;
    }
    /**
     * The public status of the project. The valid values are "true", "false".
     *
     * @param string $public
     *
     * @return self
     */
    public function setPublic(string $public) : self
    {
        $this->public = $public;
        return $this;
    }
    /**
     * Whether prevent the vulnerable images from running. The valid values are "true", "false".
     *
     * @return string
     */
    public function getPreventVul() : string
    {
        return $this->preventVul;
    }
    /**
     * Whether prevent the vulnerable images from running. The valid values are "true", "false".
     *
     * @param string $preventVul
     *
     * @return self
     */
    public function setPreventVul(string $preventVul) : self
    {
        $this->preventVul = $preventVul;
        return $this;
    }
}