<?php

namespace Gyroscops\Harbor\Api\Model;

class Worker
{
    /**
     * the id of the worker
     *
     * @var string|null
     */
    protected $id;
    /**
     * the id of the worker pool
     *
     * @var string|null
     */
    protected $poolId;
    /**
     * the name of the running job in the worker
     *
     * @var string|null
     */
    protected $jobName;
    /**
     * the id of the running job in the worker
     *
     * @var string|null
     */
    protected $jobId;
    /**
     * The start time of the worker
     *
     * @var \DateTime|null
     */
    protected $startAt;
    /**
     * the checkin of the running job in the worker
     *
     * @var string|null
     */
    protected $checkIn;
    /**
     * The checkin time of the worker
     *
     * @var \DateTime|null
     */
    protected $checkinAt;
    /**
     * the id of the worker
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * the id of the worker
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * the id of the worker pool
     *
     * @return string|null
     */
    public function getPoolId() : ?string
    {
        return $this->poolId;
    }
    /**
     * the id of the worker pool
     *
     * @param string|null $poolId
     *
     * @return self
     */
    public function setPoolId(?string $poolId) : self
    {
        $this->poolId = $poolId;
        return $this;
    }
    /**
     * the name of the running job in the worker
     *
     * @return string|null
     */
    public function getJobName() : ?string
    {
        return $this->jobName;
    }
    /**
     * the name of the running job in the worker
     *
     * @param string|null $jobName
     *
     * @return self
     */
    public function setJobName(?string $jobName) : self
    {
        $this->jobName = $jobName;
        return $this;
    }
    /**
     * the id of the running job in the worker
     *
     * @return string|null
     */
    public function getJobId() : ?string
    {
        return $this->jobId;
    }
    /**
     * the id of the running job in the worker
     *
     * @param string|null $jobId
     *
     * @return self
     */
    public function setJobId(?string $jobId) : self
    {
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * The start time of the worker
     *
     * @return \DateTime|null
     */
    public function getStartAt() : ?\DateTime
    {
        return $this->startAt;
    }
    /**
     * The start time of the worker
     *
     * @param \DateTime|null $startAt
     *
     * @return self
     */
    public function setStartAt(?\DateTime $startAt) : self
    {
        $this->startAt = $startAt;
        return $this;
    }
    /**
     * the checkin of the running job in the worker
     *
     * @return string|null
     */
    public function getCheckIn() : ?string
    {
        return $this->checkIn;
    }
    /**
     * the checkin of the running job in the worker
     *
     * @param string|null $checkIn
     *
     * @return self
     */
    public function setCheckIn(?string $checkIn) : self
    {
        $this->checkIn = $checkIn;
        return $this;
    }
    /**
     * The checkin time of the worker
     *
     * @return \DateTime|null
     */
    public function getCheckinAt() : ?\DateTime
    {
        return $this->checkinAt;
    }
    /**
     * The checkin time of the worker
     *
     * @param \DateTime|null $checkinAt
     *
     * @return self
     */
    public function setCheckinAt(?\DateTime $checkinAt) : self
    {
        $this->checkinAt = $checkinAt;
        return $this;
    }
}