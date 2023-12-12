<?php

namespace Gyroscops\Harbor\Api\Model;

class GCHistory
{
    /**
     * the id of gc job.
     *
     * @var int|null
     */
    protected $id;
    /**
     * the job name of gc job.
     *
     * @var string|null
     */
    protected $jobName;
    /**
     * the job kind of gc job.
     *
     * @var string|null
     */
    protected $jobKind;
    /**
     * the job parameters of gc job.
     *
     * @var string|null
     */
    protected $jobParameters;
    /**
     * 
     *
     * @var ScheduleObj|null
     */
    protected $schedule;
    /**
     * the status of gc job.
     *
     * @var string|null
     */
    protected $jobStatus;
    /**
     * if gc job was deleted.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * the creation time of gc job.
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * the update time of gc job.
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * the id of gc job.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * the id of gc job.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * the job name of gc job.
     *
     * @return string|null
     */
    public function getJobName() : ?string
    {
        return $this->jobName;
    }
    /**
     * the job name of gc job.
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
     * the job kind of gc job.
     *
     * @return string|null
     */
    public function getJobKind() : ?string
    {
        return $this->jobKind;
    }
    /**
     * the job kind of gc job.
     *
     * @param string|null $jobKind
     *
     * @return self
     */
    public function setJobKind(?string $jobKind) : self
    {
        $this->jobKind = $jobKind;
        return $this;
    }
    /**
     * the job parameters of gc job.
     *
     * @return string|null
     */
    public function getJobParameters() : ?string
    {
        return $this->jobParameters;
    }
    /**
     * the job parameters of gc job.
     *
     * @param string|null $jobParameters
     *
     * @return self
     */
    public function setJobParameters(?string $jobParameters) : self
    {
        $this->jobParameters = $jobParameters;
        return $this;
    }
    /**
     * 
     *
     * @return ScheduleObj|null
     */
    public function getSchedule() : ?ScheduleObj
    {
        return $this->schedule;
    }
    /**
     * 
     *
     * @param ScheduleObj|null $schedule
     *
     * @return self
     */
    public function setSchedule(?ScheduleObj $schedule) : self
    {
        $this->schedule = $schedule;
        return $this;
    }
    /**
     * the status of gc job.
     *
     * @return string|null
     */
    public function getJobStatus() : ?string
    {
        return $this->jobStatus;
    }
    /**
     * the status of gc job.
     *
     * @param string|null $jobStatus
     *
     * @return self
     */
    public function setJobStatus(?string $jobStatus) : self
    {
        $this->jobStatus = $jobStatus;
        return $this;
    }
    /**
     * if gc job was deleted.
     *
     * @return bool|null
     */
    public function getDeleted() : ?bool
    {
        return $this->deleted;
    }
    /**
     * if gc job was deleted.
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
     * the creation time of gc job.
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * the creation time of gc job.
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
     * the update time of gc job.
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * the update time of gc job.
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
}