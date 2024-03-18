<?php

namespace Gyroscops\Harbor\Api\Model;

class ProjectReq
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The name of the project.
     *
     * @var string|null
     */
    protected $projectName;
    /**
     * deprecated, reserved for project creation in replication
     *
     * @var bool|null
     */
    protected $public;
    /**
     * 
     *
     * @var ProjectMetadata|null
     */
    protected $metadata;
    /**
     * The CVE Allowlist for system or project
     *
     * @var CVEAllowlist|null
     */
    protected $cveAllowlist;
    /**
     * The storage quota of the project.
     *
     * @var int|null
     */
    protected $storageLimit;
    /**
     * The ID of referenced registry when creating the proxy cache project
     *
     * @var int|null
     */
    protected $registryId;
    /**
     * The name of the project.
     *
     * @return string|null
     */
    public function getProjectName() : ?string
    {
        return $this->projectName;
    }
    /**
     * The name of the project.
     *
     * @param string|null $projectName
     *
     * @return self
     */
    public function setProjectName(?string $projectName) : self
    {
        $this->initialized['projectName'] = true;
        $this->projectName = $projectName;
        return $this;
    }
    /**
     * deprecated, reserved for project creation in replication
     *
     * @return bool|null
     */
    public function getPublic() : ?bool
    {
        return $this->public;
    }
    /**
     * deprecated, reserved for project creation in replication
     *
     * @param bool|null $public
     *
     * @return self
     */
    public function setPublic(?bool $public) : self
    {
        $this->initialized['public'] = true;
        $this->public = $public;
        return $this;
    }
    /**
     * 
     *
     * @return ProjectMetadata|null
     */
    public function getMetadata() : ?ProjectMetadata
    {
        return $this->metadata;
    }
    /**
     * 
     *
     * @param ProjectMetadata|null $metadata
     *
     * @return self
     */
    public function setMetadata(?ProjectMetadata $metadata) : self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * The CVE Allowlist for system or project
     *
     * @return CVEAllowlist|null
     */
    public function getCveAllowlist() : ?CVEAllowlist
    {
        return $this->cveAllowlist;
    }
    /**
     * The CVE Allowlist for system or project
     *
     * @param CVEAllowlist|null $cveAllowlist
     *
     * @return self
     */
    public function setCveAllowlist(?CVEAllowlist $cveAllowlist) : self
    {
        $this->initialized['cveAllowlist'] = true;
        $this->cveAllowlist = $cveAllowlist;
        return $this;
    }
    /**
     * The storage quota of the project.
     *
     * @return int|null
     */
    public function getStorageLimit() : ?int
    {
        return $this->storageLimit;
    }
    /**
     * The storage quota of the project.
     *
     * @param int|null $storageLimit
     *
     * @return self
     */
    public function setStorageLimit(?int $storageLimit) : self
    {
        $this->initialized['storageLimit'] = true;
        $this->storageLimit = $storageLimit;
        return $this;
    }
    /**
     * The ID of referenced registry when creating the proxy cache project
     *
     * @return int|null
     */
    public function getRegistryId() : ?int
    {
        return $this->registryId;
    }
    /**
     * The ID of referenced registry when creating the proxy cache project
     *
     * @param int|null $registryId
     *
     * @return self
     */
    public function setRegistryId(?int $registryId) : self
    {
        $this->initialized['registryId'] = true;
        $this->registryId = $registryId;
        return $this;
    }
}