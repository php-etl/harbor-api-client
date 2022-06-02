<?php

namespace Harbor\Api\Model;

class ProjectSummary
{
    /**
     * The total number of master members.
     *
     * @var int
     */
    protected $masterCount;
    /**
     * The total number of project admin members.
     *
     * @var int
     */
    protected $projectAdminCount;
    /**
     * The total number of developer members.
     *
     * @var int
     */
    protected $developerCount;
    /**
     * The total number of charts under this project.
     *
     * @var int
     */
    protected $chartCount;
    /**
     * The number of the repositories under this project.
     *
     * @var int
     */
    protected $repoCount;
    /**
     * 
     *
     * @var ProjectSummaryQuota
     */
    protected $quota;
    /**
     * The total number of guest members.
     *
     * @var int
     */
    protected $guestCount;
    /**
     * The total number of master members.
     *
     * @return int
     */
    public function getMasterCount() : int
    {
        return $this->masterCount;
    }
    /**
     * The total number of master members.
     *
     * @param int $masterCount
     *
     * @return self
     */
    public function setMasterCount(int $masterCount) : self
    {
        $this->masterCount = $masterCount;
        return $this;
    }
    /**
     * The total number of project admin members.
     *
     * @return int
     */
    public function getProjectAdminCount() : int
    {
        return $this->projectAdminCount;
    }
    /**
     * The total number of project admin members.
     *
     * @param int $projectAdminCount
     *
     * @return self
     */
    public function setProjectAdminCount(int $projectAdminCount) : self
    {
        $this->projectAdminCount = $projectAdminCount;
        return $this;
    }
    /**
     * The total number of developer members.
     *
     * @return int
     */
    public function getDeveloperCount() : int
    {
        return $this->developerCount;
    }
    /**
     * The total number of developer members.
     *
     * @param int $developerCount
     *
     * @return self
     */
    public function setDeveloperCount(int $developerCount) : self
    {
        $this->developerCount = $developerCount;
        return $this;
    }
    /**
     * The total number of charts under this project.
     *
     * @return int
     */
    public function getChartCount() : int
    {
        return $this->chartCount;
    }
    /**
     * The total number of charts under this project.
     *
     * @param int $chartCount
     *
     * @return self
     */
    public function setChartCount(int $chartCount) : self
    {
        $this->chartCount = $chartCount;
        return $this;
    }
    /**
     * The number of the repositories under this project.
     *
     * @return int
     */
    public function getRepoCount() : int
    {
        return $this->repoCount;
    }
    /**
     * The number of the repositories under this project.
     *
     * @param int $repoCount
     *
     * @return self
     */
    public function setRepoCount(int $repoCount) : self
    {
        $this->repoCount = $repoCount;
        return $this;
    }
    /**
     * 
     *
     * @return ProjectSummaryQuota
     */
    public function getQuota() : ProjectSummaryQuota
    {
        return $this->quota;
    }
    /**
     * 
     *
     * @param ProjectSummaryQuota $quota
     *
     * @return self
     */
    public function setQuota(ProjectSummaryQuota $quota) : self
    {
        $this->quota = $quota;
        return $this;
    }
    /**
     * The total number of guest members.
     *
     * @return int
     */
    public function getGuestCount() : int
    {
        return $this->guestCount;
    }
    /**
     * The total number of guest members.
     *
     * @param int $guestCount
     *
     * @return self
     */
    public function setGuestCount(int $guestCount) : self
    {
        $this->guestCount = $guestCount;
        return $this;
    }
}