<?php

namespace Gyroscops\Harbor\Api\Model;

class ProjectSummary
{
    /**
     * The total number of master members.
     *
     * @var int|null
     */
    protected $masterCount;
    /**
     * The total number of project admin members.
     *
     * @var int|null
     */
    protected $projectAdminCount;
    /**
     * The total number of developer members.
     *
     * @var int|null
     */
    protected $developerCount;
    /**
     * The total number of charts under this project.
     *
     * @var int|null
     */
    protected $chartCount;
    /**
     * The number of the repositories under this project.
     *
     * @var int|null
     */
    protected $repoCount;
    /**
     *
     *
     * @var ProjectSummaryQuota|null
     */
    protected $quota;
    /**
     * The total number of guest members.
     *
     * @var int|null
     */
    protected $guestCount;
    /**
     * The total number of master members.
     *
     * @return int|null
     */
    public function getMasterCount(): ?int
    {
        return $this->masterCount;
    }
    /**
     * The total number of master members.
     *
     * @param int|null $masterCount
     *
     * @return self
     */
    public function setMasterCount(?int $masterCount): self
    {
        $this->masterCount = $masterCount;
        return $this;
    }
    /**
     * The total number of project admin members.
     *
     * @return int|null
     */
    public function getProjectAdminCount(): ?int
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
    public function setProjectAdminCount(?int $projectAdminCount): self
    {
        $this->projectAdminCount = $projectAdminCount;
        return $this;
    }
    /**
     * The total number of developer members.
     *
     * @return int|null
     */
    public function getDeveloperCount(): ?int
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
    public function setDeveloperCount(?int $developerCount): self
    {
        $this->developerCount = $developerCount;
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
     *
     *
     * @return ProjectSummaryQuota|null
     */
    public function getQuota(): ?ProjectSummaryQuota
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
    public function setQuota(?ProjectSummaryQuota $quota): self
    {
        $this->quota = $quota;
        return $this;
    }
    /**
     * The total number of guest members.
     *
     * @return int|null
     */
    public function getGuestCount(): ?int
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
    public function setGuestCount(?int $guestCount): self
    {
        $this->guestCount = $guestCount;
        return $this;
    }
}
