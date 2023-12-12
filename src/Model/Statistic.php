<?php

namespace Gyroscops\Harbor\Api\Model;

class Statistic
{
    /**
     * The count of the private projects
     *
     * @var int|null
     */
    protected $privateProjectCount;
    /**
     * The count of the private repositories
     *
     * @var int|null
     */
    protected $privateRepoCount;
    /**
     * The count of the public projects
     *
     * @var int|null
     */
    protected $publicProjectCount;
    /**
     * The count of the public repositories
     *
     * @var int|null
     */
    protected $publicRepoCount;
    /**
     * The count of the total projects, only be seen by the system admin
     *
     * @var int|null
     */
    protected $totalProjectCount;
    /**
     * The count of the total repositories, only be seen by the system admin
     *
     * @var int|null
     */
    protected $totalRepoCount;
    /**
     * The total storage consumption of blobs, only be seen by the system admin
     *
     * @var int|null
     */
    protected $totalStorageConsumption;
    /**
     * The count of the private projects
     *
     * @return int|null
     */
    public function getPrivateProjectCount() : ?int
    {
        return $this->privateProjectCount;
    }
    /**
     * The count of the private projects
     *
     * @param int|null $privateProjectCount
     *
     * @return self
     */
    public function setPrivateProjectCount(?int $privateProjectCount) : self
    {
        $this->privateProjectCount = $privateProjectCount;
        return $this;
    }
    /**
     * The count of the private repositories
     *
     * @return int|null
     */
    public function getPrivateRepoCount() : ?int
    {
        return $this->privateRepoCount;
    }
    /**
     * The count of the private repositories
     *
     * @param int|null $privateRepoCount
     *
     * @return self
     */
    public function setPrivateRepoCount(?int $privateRepoCount) : self
    {
        $this->privateRepoCount = $privateRepoCount;
        return $this;
    }
    /**
     * The count of the public projects
     *
     * @return int|null
     */
    public function getPublicProjectCount() : ?int
    {
        return $this->publicProjectCount;
    }
    /**
     * The count of the public projects
     *
     * @param int|null $publicProjectCount
     *
     * @return self
     */
    public function setPublicProjectCount(?int $publicProjectCount) : self
    {
        $this->publicProjectCount = $publicProjectCount;
        return $this;
    }
    /**
     * The count of the public repositories
     *
     * @return int|null
     */
    public function getPublicRepoCount() : ?int
    {
        return $this->publicRepoCount;
    }
    /**
     * The count of the public repositories
     *
     * @param int|null $publicRepoCount
     *
     * @return self
     */
    public function setPublicRepoCount(?int $publicRepoCount) : self
    {
        $this->publicRepoCount = $publicRepoCount;
        return $this;
    }
    /**
     * The count of the total projects, only be seen by the system admin
     *
     * @return int|null
     */
    public function getTotalProjectCount() : ?int
    {
        return $this->totalProjectCount;
    }
    /**
     * The count of the total projects, only be seen by the system admin
     *
     * @param int|null $totalProjectCount
     *
     * @return self
     */
    public function setTotalProjectCount(?int $totalProjectCount) : self
    {
        $this->totalProjectCount = $totalProjectCount;
        return $this;
    }
    /**
     * The count of the total repositories, only be seen by the system admin
     *
     * @return int|null
     */
    public function getTotalRepoCount() : ?int
    {
        return $this->totalRepoCount;
    }
    /**
     * The count of the total repositories, only be seen by the system admin
     *
     * @param int|null $totalRepoCount
     *
     * @return self
     */
    public function setTotalRepoCount(?int $totalRepoCount) : self
    {
        $this->totalRepoCount = $totalRepoCount;
        return $this;
    }
    /**
     * The total storage consumption of blobs, only be seen by the system admin
     *
     * @return int|null
     */
    public function getTotalStorageConsumption() : ?int
    {
        return $this->totalStorageConsumption;
    }
    /**
     * The total storage consumption of blobs, only be seen by the system admin
     *
     * @param int|null $totalStorageConsumption
     *
     * @return self
     */
    public function setTotalStorageConsumption(?int $totalStorageConsumption) : self
    {
        $this->totalStorageConsumption = $totalStorageConsumption;
        return $this;
    }
}