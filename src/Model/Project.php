<?php

namespace Gyroscops\Harbor\Api\Model;

class Project
{
    /**
     * The update time of the project.
     *
     * @var string|null
     */
    protected $updateTime;
    /**
     * The owner name of the project.
     *
     * @var string|null
     */
    protected $ownerName;
    /**
     * The name of the project.
     *
     * @var string|null
     */
    protected $name;
    /**
     * A deletion mark of the project.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The owner ID of the project always means the creator of the project.
     *
     * @var int|null
     */
    protected $ownerId;
    /**
     * The number of the repositories under this project.
     *
     * @var int|null
     */
    protected $repoCount;
    /**
     * The creation time of the project.
     *
     * @var string|null
     */
    protected $creationTime;
    /**
     * Correspond to the UI about whether the project's publicity is  updatable (for UI)
     *
     * @var bool|null
     */
    protected $togglable;
    /**
     * Project ID
     *
     * @var int|null
     */
    protected $projectId;
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
     * The total number of charts under this project.
     *
     * @var int|null
     */
    protected $chartCount;
    /**
     * The CVE Whitelist for system or project
     *
     * @var CVEWhitelist|null
     */
    protected $cveWhitelist;
    /**
     *
     *
     * @var ProjectMetadata|null
     */
    protected $metadata;
    /**
     * The update time of the project.
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }
    /**
     * The update time of the project.
     *
     * @param string|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     * The owner name of the project.
     *
     * @return string|null
     */
    public function getOwnerName(): ?string
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
    public function setOwnerName(?string $ownerName): self
    {
        $this->ownerName = $ownerName;
        return $this;
    }
    /**
     * The name of the project.
     *
     * @return string|null
     */
    public function getName(): ?string
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
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * A deletion mark of the project.
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
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
    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * The owner ID of the project always means the creator of the project.
     *
     * @return int|null
     */
    public function getOwnerId(): ?int
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
    public function setOwnerId(?int $ownerId): self
    {
        $this->ownerId = $ownerId;
        return $this;
    }
    /**
     * The number of the repositories under this project.
     *
     * @return int|null
     */
    public function getRepoCount(): ?int
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
    public function setRepoCount(?int $repoCount): self
    {
        $this->repoCount = $repoCount;
        return $this;
    }
    /**
     * The creation time of the project.
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * The creation time of the project.
     *
     * @param string|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?string $creationTime): self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Correspond to the UI about whether the project's publicity is  updatable (for UI)
     *
     * @return bool|null
     */
    public function getTogglable(): ?bool
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
    public function setTogglable(?bool $togglable): self
    {
        $this->togglable = $togglable;
        return $this;
    }
    /**
     * Project ID
     *
     * @return int|null
     */
    public function getProjectId(): ?int
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
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The role ID with highest permission of the current user who triggered the API (for UI).  This attribute is deprecated and will be removed in future versions.
     *
     * @return int|null
     */
    public function getCurrentUserRoleId(): ?int
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
    public function setCurrentUserRoleId(?int $currentUserRoleId): self
    {
        $this->currentUserRoleId = $currentUserRoleId;
        return $this;
    }
    /**
     * The list of role ID of the current user who triggered the API (for UI)
     *
     * @return int[]|null
     */
    public function getCurrentUserRoleIds(): ?array
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
    public function setCurrentUserRoleIds(?array $currentUserRoleIds): self
    {
        $this->currentUserRoleIds = $currentUserRoleIds;
        return $this;
    }
    /**
     * The total number of charts under this project.
     *
     * @return int|null
     */
    public function getChartCount(): ?int
    {
        return $this->chartCount;
    }
    /**
     * The total number of charts under this project.
     *
     * @param int|null $chartCount
     *
     * @return self
     */
    public function setChartCount(?int $chartCount): self
    {
        $this->chartCount = $chartCount;
        return $this;
    }
    /**
     * The CVE Whitelist for system or project
     *
     * @return CVEWhitelist|null
     */
    public function getCveWhitelist(): ?CVEWhitelist
    {
        return $this->cveWhitelist;
    }
    /**
     * The CVE Whitelist for system or project
     *
     * @param CVEWhitelist|null $cveWhitelist
     *
     * @return self
     */
    public function setCveWhitelist(?CVEWhitelist $cveWhitelist): self
    {
        $this->cveWhitelist = $cveWhitelist;
        return $this;
    }
    /**
     *
     *
     * @return ProjectMetadata|null
     */
    public function getMetadata(): ?ProjectMetadata
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
    public function setMetadata(?ProjectMetadata $metadata): self
    {
        $this->metadata = $metadata;
        return $this;
    }
}
