<?php

namespace Gyroscops\Harbor\Api\Model;

class Schedule
{
    /**
     * The id of the schedule.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The status of the schedule.
     *
     * @var string|null
     */
    protected $status;
    /**
     * the creation time of the schedule.
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * the update time of the schedule.
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * 
     *
     * @var ScheduleObj|null
     */
    protected $schedule;
    /**
     * The parameters of schedule job
     *
     * @var mixed[]|null
     */
    protected $parameters;
    /**
     * The id of the schedule.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The id of the schedule.
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
     * The status of the schedule.
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The status of the schedule.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * the creation time of the schedule.
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * the creation time of the schedule.
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
     * the update time of the schedule.
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * the update time of the schedule.
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
     * The parameters of schedule job
     *
     * @return mixed[]|null
     */
    public function getParameters() : ?iterable
    {
        return $this->parameters;
    }
    /**
     * The parameters of schedule job
     *
     * @param mixed[]|null $parameters
     *
     * @return self
     */
    public function setParameters(?iterable $parameters) : self
    {
        $this->parameters = $parameters;
        return $this;
    }
}