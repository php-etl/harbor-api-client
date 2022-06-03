<?php

namespace Gyroscops\Harbor\Api\Model;

class ProjectReq
{
    /**
     * The count quota of the project.
     *
     * @var int
     */
    protected $countLimit;
    /**
     * The name of the project.
     *
     * @var string
     */
    protected $projectName;
    /**
     * The CVE Whitelist for system or project
     *
     * @var CVEWhitelist
     */
    protected $cveWhitelist;
    /**
     * The storage quota of the project.
     *
     * @var int
     */
    protected $storageLimit;
    /**
     * 
     *
     * @var ProjectMetadata
     */
    protected $metadata;
    /**
     * The count quota of the project.
     *
     * @return int
     */
    public function getCountLimit() : int
    {
        return $this->countLimit;
    }
    /**
     * The count quota of the project.
     *
     * @param int $countLimit
     *
     * @return self
     */
    public function setCountLimit(int $countLimit) : self
    {
        $this->countLimit = $countLimit;
        return $this;
    }
    /**
     * The name of the project.
     *
     * @return string
     */
    public function getProjectName() : string
    {
        return $this->projectName;
    }
    /**
     * The name of the project.
     *
     * @param string $projectName
     *
     * @return self
     */
    public function setProjectName(string $projectName) : self
    {
        $this->projectName = $projectName;
        return $this;
    }
    /**
     * The CVE Whitelist for system or project
     *
     * @return CVEWhitelist
     */
    public function getCveWhitelist() : CVEWhitelist
    {
        return $this->cveWhitelist;
    }
    /**
     * The CVE Whitelist for system or project
     *
     * @param CVEWhitelist $cveWhitelist
     *
     * @return self
     */
    public function setCveWhitelist(CVEWhitelist $cveWhitelist) : self
    {
        $this->cveWhitelist = $cveWhitelist;
        return $this;
    }
    /**
     * The storage quota of the project.
     *
     * @return int
     */
    public function getStorageLimit() : int
    {
        return $this->storageLimit;
    }
    /**
     * The storage quota of the project.
     *
     * @param int $storageLimit
     *
     * @return self
     */
    public function setStorageLimit(int $storageLimit) : self
    {
        $this->storageLimit = $storageLimit;
        return $this;
    }
    /**
     * 
     *
     * @return ProjectMetadata
     */
    public function getMetadata() : ProjectMetadata
    {
        return $this->metadata;
    }
    /**
     * 
     *
     * @param ProjectMetadata $metadata
     *
     * @return self
     */
    public function setMetadata(ProjectMetadata $metadata) : self
    {
        $this->metadata = $metadata;
        return $this;
    }
}