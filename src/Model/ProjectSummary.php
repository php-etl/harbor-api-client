<?php

namespace Gyroscops\Harbor\Api\Model;

class ProjectSummary
{
    /**
     * The number of the repositories under this project.
     *
     * @var int|null
     */
    protected $repoCount;
    /**
     * The total number of project admin members.
     *
     * @var int|null
     */
    protected $projectAdminCount;
    /**
     * The total number of maintainer members.
     *
     * @var int|null
     */
    protected $maintainerCount;
    /**
     * The total number of developer members.
     *
     * @var int|null
     */
    protected $developerCount;
    /**
     * The total number of guest members.
     *
     * @var int|null
     */
    protected $guestCount;
    /**
     * The total number of limited guest members.
     *
     * @var int|null
     */
    protected $limitedGuestCount;
    /**
     * 
     *
     * @var ProjectSummaryQuota|null
     */
    protected $quota;
    /**
     * 
     *
     * @var Registry|null
     */
    protected $registry;
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
     * The total number of project admin members.
     *
     * @return int|null
     */
    public function getProjectAdminCount() : ?int
    {
        return $this->projectAdminCount;
    }
    /**
     * The total number of project admin members.
     *
     * @param int|null $projectAdminCount
     *
     * @return self
     */
    public function setProjectAdminCount(?int $projectAdminCount) : self
    {
        $this->projectAdminCount = $projectAdminCount;
        return $this;
    }
    /**
     * The total number of maintainer members.
     *
     * @return int|null
     */
    public function getMaintainerCount() : ?int
    {
        return $this->maintainerCount;
    }
    /**
     * The total number of maintainer members.
     *
     * @param int|null $maintainerCount
     *
     * @return self
     */
    public function setMaintainerCount(?int $maintainerCount) : self
    {
        $this->maintainerCount = $maintainerCount;
        return $this;
    }
    /**
     * The total number of developer members.
     *
     * @return int|null
     */
    public function getDeveloperCount() : ?int
    {
        return $this->developerCount;
    }
    /**
     * The total number of developer members.
     *
     * @param int|null $developerCount
     *
     * @return self
     */
    public function setDeveloperCount(?int $developerCount) : self
    {
        $this->developerCount = $developerCount;
        return $this;
    }
    /**
     * The total number of guest members.
     *
     * @return int|null
     */
    public function getGuestCount() : ?int
    {
        return $this->guestCount;
    }
    /**
     * The total number of guest members.
     *
     * @param int|null $guestCount
     *
     * @return self
     */
    public function setGuestCount(?int $guestCount) : self
    {
        $this->guestCount = $guestCount;
        return $this;
    }
    /**
     * The total number of limited guest members.
     *
     * @return int|null
     */
    public function getLimitedGuestCount() : ?int
    {
        return $this->limitedGuestCount;
    }
    /**
     * The total number of limited guest members.
     *
     * @param int|null $limitedGuestCount
     *
     * @return self
     */
    public function setLimitedGuestCount(?int $limitedGuestCount) : self
    {
        $this->limitedGuestCount = $limitedGuestCount;
        return $this;
    }
    /**
     * 
     *
     * @return ProjectSummaryQuota|null
     */
    public function getQuota() : ?ProjectSummaryQuota
    {
        return $this->quota;
    }
    /**
     * 
     *
     * @param ProjectSummaryQuota|null $quota
     *
     * @return self
     */
    public function setQuota(?ProjectSummaryQuota $quota) : self
    {
        $this->quota = $quota;
        return $this;
    }
    /**
     * 
     *
     * @return Registry|null
     */
    public function getRegistry() : ?Registry
    {
        return $this->registry;
    }
    /**
     * 
     *
     * @param Registry|null $registry
     *
     * @return self
     */
    public function setRegistry(?Registry $registry) : self
    {
        $this->registry = $registry;
        return $this;
    }
}