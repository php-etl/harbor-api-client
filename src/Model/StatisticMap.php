<?php

namespace Harbor\Api\Model;

class StatisticMap
{
    /**
     * The count of the total projects, only be seen when the is admin.
     *
     * @var int
     */
    protected $totalProjectCount;
    /**
     * The count of the public projects.
     *
     * @var int
     */
    protected $publicProjectCount;
    /**
     * The count of the private projects which the user is a member of.
     *
     * @var int
     */
    protected $privateProjectCount;
    /**
     * The count of the public repositories belonging to the public projects which the user is a member of.
     *
     * @var int
     */
    protected $publicRepoCount;
    /**
     * The count of the total repositories, only be seen when the user is admin.
     *
     * @var int
     */
    protected $totalRepoCount;
    /**
     * The count of the private repositories belonging to the projects which the user is a member of.
     *
     * @var int
     */
    protected $privateRepoCount;
    /**
     * The count of the total projects, only be seen when the is admin.
     *
     * @return int
     */
    public function getTotalProjectCount() : int
    {
        return $this->totalProjectCount;
    }
    /**
     * The count of the total projects, only be seen when the is admin.
     *
     * @param int $totalProjectCount
     *
     * @return self
     */
    public function setTotalProjectCount(int $totalProjectCount) : self
    {
        $this->totalProjectCount = $totalProjectCount;
        return $this;
    }
    /**
     * The count of the public projects.
     *
     * @return int
     */
    public function getPublicProjectCount() : int
    {
        return $this->publicProjectCount;
    }
    /**
     * The count of the public projects.
     *
     * @param int $publicProjectCount
     *
     * @return self
     */
    public function setPublicProjectCount(int $publicProjectCount) : self
    {
        $this->publicProjectCount = $publicProjectCount;
        return $this;
    }
    /**
     * The count of the private projects which the user is a member of.
     *
     * @return int
     */
    public function getPrivateProjectCount() : int
    {
        return $this->privateProjectCount;
    }
    /**
     * The count of the private projects which the user is a member of.
     *
     * @param int $privateProjectCount
     *
     * @return self
     */
    public function setPrivateProjectCount(int $privateProjectCount) : self
    {
        $this->privateProjectCount = $privateProjectCount;
        return $this;
    }
    /**
     * The count of the public repositories belonging to the public projects which the user is a member of.
     *
     * @return int
     */
    public function getPublicRepoCount() : int
    {
        return $this->publicRepoCount;
    }
    /**
     * The count of the public repositories belonging to the public projects which the user is a member of.
     *
     * @param int $publicRepoCount
     *
     * @return self
     */
    public function setPublicRepoCount(int $publicRepoCount) : self
    {
        $this->publicRepoCount = $publicRepoCount;
        return $this;
    }
    /**
     * The count of the total repositories, only be seen when the user is admin.
     *
     * @return int
     */
    public function getTotalRepoCount() : int
    {
        return $this->totalRepoCount;
    }
    /**
     * The count of the total repositories, only be seen when the user is admin.
     *
     * @param int $totalRepoCount
     *
     * @return self
     */
    public function setTotalRepoCount(int $totalRepoCount) : self
    {
        $this->totalRepoCount = $totalRepoCount;
        return $this;
    }
    /**
     * The count of the private repositories belonging to the projects which the user is a member of.
     *
     * @return int
     */
    public function getPrivateRepoCount() : int
    {
        return $this->privateRepoCount;
    }
    /**
     * The count of the private repositories belonging to the projects which the user is a member of.
     *
     * @param int $privateRepoCount
     *
     * @return self
     */
    public function setPrivateRepoCount(int $privateRepoCount) : self
    {
        $this->privateRepoCount = $privateRepoCount;
        return $this;
    }
}