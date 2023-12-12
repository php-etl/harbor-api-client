<?php

namespace Gyroscops\Harbor\Api\Model;

class ExecHistory
{
    /**
     * the id of purge job.
     *
     * @var int|null
     */
    protected $id;
    /**
     * the job name of purge job.
     *
     * @var string|null
     */
    protected $jobName;
    /**
     * the job kind of purge job.
     *
     * @var string|null
     */
    protected $jobKind;
    /**
     * the job parameters of purge job.
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
     * the status of purge job.
     *
     * @var string|null
     */
    protected $jobStatus;
    /**
     * if purge job was deleted.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * the creation time of purge job.
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * the update time of purge job.
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * the id of purge job.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * the id of purge job.
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
     * the job name of purge job.
     *
     * @return string|null
     */
    public function getJobName() : ?string
    {
        return $this->jobName;
    }
    /**
     * the job name of purge job.
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
     * the job kind of purge job.
     *
     * @return string|null
     */
    public function getJobKind() : ?string
    {
        return $this->jobKind;
    }
    /**
     * the job kind of purge job.
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
     * the job parameters of purge job.
     *
     * @return string|null
     */
    public function getJobParameters() : ?string
    {
        return $this->jobParameters;
    }
    /**
     * the job parameters of purge job.
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
     * the status of purge job.
     *
     * @return string|null
     */
    public function getJobStatus() : ?string
    {
        return $this->jobStatus;
    }
    /**
     * the status of purge job.
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
     * if purge job was deleted.
     *
     * @return bool|null
     */
    public function getDeleted() : ?bool
    {
        return $this->deleted;
    }
    /**
     * if purge job was deleted.
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
     * the creation time of purge job.
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * the creation time of purge job.
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
     * the update time of purge job.
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * the update time of purge job.
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