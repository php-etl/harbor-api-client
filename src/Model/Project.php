<?php

namespace Gyroscops\Harbor\Api\Model;

class Project
{
    /**
     * Project ID
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The owner ID of the project always means the creator of the project.
     *
     * @var int|null
     */
    protected $ownerId;
    /**
     * The name of the project.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The ID of referenced registry when the project is a proxy cache project.
     *
     * @var int|null
     */
    protected $registryId;
    /**
     * The creation time of the project.
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * The update time of the project.
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * A deletion mark of the project.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The owner name of the project.
     *
     * @var string|null
     */
    protected $ownerName;
    /**
     * Correspond to the UI about whether the project's publicity is  updatable (for UI)
     *
     * @var bool|null
     */
    protected $togglable;
    /**
     * The role ID with highest permission of the current user who triggered the API (for UI).  This attribute is deprecated and will be removed in future versions.
     *
     * @var int|null
     */
    protected $currentUserRoleId;
    /**
     * The list of role ID of the current user who triggered the API (for UI)
     *
     * @var int[]|null
     */
    protected $currentUserRoleIds;
    /**
     * The number of the repositories under this project.
     *
     * @var int|null
     */
    protected $repoCount;
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
     * Project ID
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * Project ID
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The owner ID of the project always means the creator of the project.
     *
     * @return int|null
     */
    public function getOwnerId() : ?int
    {
        return $this->ownerId;
    }
    /**
     * The owner ID of the project always means the creator of the project.
     *
     * @param int|null $ownerId
     *
     * @return self
     */
    public function setOwnerId(?int $ownerId) : self
    {
        $this->ownerId = $ownerId;
        return $this;
    }
    /**
     * The name of the project.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the project.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The ID of referenced registry when the project is a proxy cache project.
     *
     * @return int|null
     */
    public function getRegistryId() : ?int
    {
        return $this->registryId;
    }
    /**
     * The ID of referenced registry when the project is a proxy cache project.
     *
     * @param int|null $registryId
     *
     * @return self
     */
    public function setRegistryId(?int $registryId) : self
    {
        $this->registryId = $registryId;
        return $this;
    }
    /**
     * The creation time of the project.
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * The creation time of the project.
     *
     * @param \DateTime|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?\DateTime $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The update time of the project.
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * The update time of the project.
     *
     * @param \DateTime|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?\DateTime $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     * A deletion mark of the project.
     *
     * @return bool|null
     */
    public function getDeleted() : ?bool
    {
        return $this->deleted;
    }
    /**
     * A deletion mark of the project.
     *
     * @param bool|null $deleted
     *
     * @return self
     */
    public function setDeleted(?bool $deleted) : self
    {
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * The owner name of the project.
     *
     * @return string|null
     */
    public function getOwnerName() : ?string
    {
        return $this->ownerName;
    }
    /**
     * The owner name of the project.
     *
     * @param string|null $ownerName
     *
     * @return self
     */
    public function setOwnerName(?string $ownerName) : self
    {
        $this->ownerName = $ownerName;
        return $this;
    }
    /**
     * Correspond to the UI about whether the project's publicity is  updatable (for UI)
     *
     * @return bool|null
     */
    public function getTogglable() : ?bool
    {
        return $this->togglable;
    }
    /**
     * Correspond to the UI about whether the project's publicity is  updatable (for UI)
     *
     * @param bool|null $togglable
     *
     * @return self
     */
    public function setTogglable(?bool $togglable) : self
    {
        $this->togglable = $togglable;
        return $this;
    }
    /**
     * The role ID with highest permission of the current user who triggered the API (for UI).  This attribute is deprecated and will be removed in future versions.
     *
     * @return int|null
     */
    public function getCurrentUserRoleId() : ?int
    {
        return $this->currentUserRoleId;
    }
    /**
     * The role ID with highest permission of the current user who triggered the API (for UI).  This attribute is deprecated and will be removed in future versions.
     *
     * @param int|null $currentUserRoleId
     *
     * @return self
     */
    public function setCurrentUserRoleId(?int $currentUserRoleId) : self
    {
        $this->currentUserRoleId = $currentUserRoleId;
        return $this;
    }
    /**
     * The list of role ID of the current user who triggered the API (for UI)
     *
     * @return int[]|null
     */
    public function getCurrentUserRoleIds() : ?array
    {
        return $this->currentUserRoleIds;
    }
    /**
     * The list of role ID of the current user who triggered the API (for UI)
     *
     * @param int[]|null $currentUserRoleIds
     *
     * @return self
     */
    public function setCurrentUserRoleIds(?array $currentUserRoleIds) : self
    {
        $this->currentUserRoleIds = $currentUserRoleIds;
        return $this;
    }
    /**
     * The number of the repositories under this project.
     *
     * @return int|null
     */
    public function getRepoCount() : ?int
    {
        return $this->repoCount;
    }
    /**
     * The number of the repositories under this project.
     *
     * @param int|null $repoCount
     *
     * @return self
     */
    public function setRepoCount(?int $repoCount) : self
    {
        $this->repoCount = $repoCount;
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
        $this->cveAllowlist = $cveAllowlist;
        return $this;
    }
}