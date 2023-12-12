<?php

namespace Gyroscops\Harbor\Api\Model;

class Task
{
    /**
     * The ID of task
     *
     * @var int|null
     */
    protected $id;
    /**
     * The ID of task execution
     *
     * @var int|null
     */
    protected $executionId;
    /**
     * The status of task
     *
     * @var string|null
     */
    protected $status;
    /**
     * The status message of task
     *
     * @var string|null
     */
    protected $statusMessage;
    /**
     * The count of task run
     *
     * @var int|null
     */
    protected $runCount;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $extraAttrs;
    /**
     * The creation time of task
     *
     * @var string|null
     */
    protected $creationTime;
    /**
     * The update time of task
     *
     * @var string|null
     */
    protected $updateTime;
    /**
     * The start time of task
     *
     * @var string|null
     */
    protected $startTime;
    /**
     * The end time of task
     *
     * @var string|null
     */
    protected $endTime;
    /**
     * The ID of task
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of task
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
     * The ID of task execution
     *
     * @return int|null
     */
    public function getExecutionId() : ?int
    {
        return $this->executionId;
    }
    /**
     * The ID of task execution
     *
     * @param int|null $executionId
     *
     * @return self
     */
    public function setExecutionId(?int $executionId) : self
    {
        $this->executionId = $executionId;
        return $this;
    }
    /**
     * The status of task
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The status of task
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
     * The status message of task
     *
     * @return string|null
     */
    public function getStatusMessage() : ?string
    {
        return $this->statusMessage;
    }
    /**
     * The status message of task
     *
     * @param string|null $statusMessage
     *
     * @return self
     */
    public function setStatusMessage(?string $statusMessage) : self
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }
    /**
     * The count of task run
     *
     * @return int|null
     */
    public function getRunCount() : ?int
    {
        return $this->runCount;
    }
    /**
     * The count of task run
     *
     * @param int|null $runCount
     *
     * @return self
     */
    public function setRunCount(?int $runCount) : self
    {
        $this->runCount = $runCount;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getExtraAttrs() : ?iterable
    {
        return $this->extraAttrs;
    }
    /**
     * 
     *
     * @param mixed[]|null $extraAttrs
     *
     * @return self
     */
    public function setExtraAttrs(?iterable $extraAttrs) : self
    {
        $this->extraAttrs = $extraAttrs;
        return $this;
    }
    /**
     * The creation time of task
     *
     * @return string|null
     */
    public function getCreationTime() : ?string
    {
        return $this->creationTime;
    }
    /**
     * The creation time of task
     *
     * @param string|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?string $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The update time of task
     *
     * @return string|null
     */
    public function getUpdateTime() : ?string
    {
        return $this->updateTime;
    }
    /**
     * The update time of task
     *
     * @param string|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?string $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     * The start time of task
     *
     * @return string|null
     */
    public function getStartTime() : ?string
    {
        return $this->startTime;
    }
    /**
     * The start time of task
     *
     * @param string|null $startTime
     *
     * @return self
     */
    public function setStartTime(?string $startTime) : self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * The end time of task
     *
     * @return string|null
     */
    public function getEndTime() : ?string
    {
        return $this->endTime;
    }
    /**
     * The end time of task
     *
     * @param string|null $endTime
     *
     * @return self
     */
    public function setEndTime(?string $endTime) : self
    {
        $this->endTime = $endTime;
        return $this;
    }
}