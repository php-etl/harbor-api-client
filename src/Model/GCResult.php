<?php

namespace Gyroscops\Harbor\Api\Model;

class GCResult
{
    /**
     * the status of gc job.
     *
     * @var string
     */
    protected $jobStatus;
    /**
     * the update time of gc job.
     *
     * @var string
     */
    protected $updateTime;
    /**
     * the job parameters of gc job.
     *
     * @var string
     */
    protected $jobParameters;
    /**
     * 
     *
     * @var AdminJobScheduleObj
     */
    protected $schedule;
    /**
     * if gc job was deleted.
     *
     * @var bool
     */
    protected $deleted;
    /**
     * the job kind of gc job.
     *
     * @var string
     */
    protected $jobKind;
    /**
     * the creation time of gc job.
     *
     * @var string
     */
    protected $creationTime;
    /**
     * the id of gc job.
     *
     * @var int
     */
    protected $id;
    /**
     * the job name of gc job.
     *
     * @var string
     */
    protected $jobName;
    /**
     * the status of gc job.
     *
     * @return string
     */
    public function getJobStatus() : string
    {
        return $this->jobStatus;
    }
    /**
     * the status of gc job.
     *
     * @param string $jobStatus
     *
     * @return self
     */
    public function setJobStatus(string $jobStatus) : self
    {
        $this->jobStatus = $jobStatus;
        return $this;
    }
    /**
     * the update time of gc job.
     *
     * @return string
     */
    public function getUpdateTime() : string
    {
        return $this->updateTime;
    }
    /**
     * the update time of gc job.
     *
     * @param string $updateTime
     *
     * @return self
     */
    public function setUpdateTime(string $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     * the job parameters of gc job.
     *
     * @return string
     */
    public function getJobParameters() : string
    {
        return $this->jobParameters;
    }
    /**
     * the job parameters of gc job.
     *
     * @param string $jobParameters
     *
     * @return self
     */
    public function setJobParameters(string $jobParameters) : self
    {
        $this->jobParameters = $jobParameters;
        return $this;
    }
    /**
     * 
     *
     * @return AdminJobScheduleObj
     */
    public function getSchedule() : AdminJobScheduleObj
    {
        return $this->schedule;
    }
    /**
     * 
     *
     * @param AdminJobScheduleObj $schedule
     *
     * @return self
     */
    public function setSchedule(AdminJobScheduleObj $schedule) : self
    {
        $this->schedule = $schedule;
        return $this;
    }
    /**
     * if gc job was deleted.
     *
     * @return bool
     */
    public function getDeleted() : bool
    {
        return $this->deleted;
    }
    /**
     * if gc job was deleted.
     *
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted) : self
    {
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * the job kind of gc job.
     *
     * @return string
     */
    public function getJobKind() : string
    {
        return $this->jobKind;
    }
    /**
     * the job kind of gc job.
     *
     * @param string $jobKind
     *
     * @return self
     */
    public function setJobKind(string $jobKind) : self
    {
        $this->jobKind = $jobKind;
        return $this;
    }
    /**
     * the creation time of gc job.
     *
     * @return string
     */
    public function getCreationTime() : string
    {
        return $this->creationTime;
    }
    /**
     * the creation time of gc job.
     *
     * @param string $creationTime
     *
     * @return self
     */
    public function setCreationTime(string $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * the id of gc job.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * the id of gc job.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * the job name of gc job.
     *
     * @return string
     */
    public function getJobName() : string
    {
        return $this->jobName;
    }
    /**
     * the job name of gc job.
     *
     * @param string $jobName
     *
     * @return self
     */
    public function setJobName(string $jobName) : self
    {
        $this->jobName = $jobName;
        return $this;
    }
}