<?php

namespace Gyroscops\Harbor\Api\Model;

class Metrics
{
    /**
     * The count of task
     *
     * @var int|null
     */
    protected $taskCount;
    /**
     * The count of success task
     *
     * @var int|null
     */
    protected $successTaskCount;
    /**
     * The count of error task
     *
     * @var int|null
     */
    protected $errorTaskCount;
    /**
     * The count of pending task
     *
     * @var int|null
     */
    protected $pendingTaskCount;
    /**
     * The count of running task
     *
     * @var int|null
     */
    protected $runningTaskCount;
    /**
     * The count of scheduled task
     *
     * @var int|null
     */
    protected $scheduledTaskCount;
    /**
     * The count of stopped task
     *
     * @var int|null
     */
    protected $stoppedTaskCount;
    /**
     * The count of task
     *
     * @return int|null
     */
    public function getTaskCount() : ?int
    {
        return $this->taskCount;
    }
    /**
     * The count of task
     *
     * @param int|null $taskCount
     *
     * @return self
     */
    public function setTaskCount(?int $taskCount) : self
    {
        $this->taskCount = $taskCount;
        return $this;
    }
    /**
     * The count of success task
     *
     * @return int|null
     */
    public function getSuccessTaskCount() : ?int
    {
        return $this->successTaskCount;
    }
    /**
     * The count of success task
     *
     * @param int|null $successTaskCount
     *
     * @return self
     */
    public function setSuccessTaskCount(?int $successTaskCount) : self
    {
        $this->successTaskCount = $successTaskCount;
        return $this;
    }
    /**
     * The count of error task
     *
     * @return int|null
     */
    public function getErrorTaskCount() : ?int
    {
        return $this->errorTaskCount;
    }
    /**
     * The count of error task
     *
     * @param int|null $errorTaskCount
     *
     * @return self
     */
    public function setErrorTaskCount(?int $errorTaskCount) : self
    {
        $this->errorTaskCount = $errorTaskCount;
        return $this;
    }
    /**
     * The count of pending task
     *
     * @return int|null
     */
    public function getPendingTaskCount() : ?int
    {
        return $this->pendingTaskCount;
    }
    /**
     * The count of pending task
     *
     * @param int|null $pendingTaskCount
     *
     * @return self
     */
    public function setPendingTaskCount(?int $pendingTaskCount) : self
    {
        $this->pendingTaskCount = $pendingTaskCount;
        return $this;
    }
    /**
     * The count of running task
     *
     * @return int|null
     */
    public function getRunningTaskCount() : ?int
    {
        return $this->runningTaskCount;
    }
    /**
     * The count of running task
     *
     * @param int|null $runningTaskCount
     *
     * @return self
     */
    public function setRunningTaskCount(?int $runningTaskCount) : self
    {
        $this->runningTaskCount = $runningTaskCount;
        return $this;
    }
    /**
     * The count of scheduled task
     *
     * @return int|null
     */
    public function getScheduledTaskCount() : ?int
    {
        return $this->scheduledTaskCount;
    }
    /**
     * The count of scheduled task
     *
     * @param int|null $scheduledTaskCount
     *
     * @return self
     */
    public function setScheduledTaskCount(?int $scheduledTaskCount) : self
    {
        $this->scheduledTaskCount = $scheduledTaskCount;
        return $this;
    }
    /**
     * The count of stopped task
     *
     * @return int|null
     */
    public function getStoppedTaskCount() : ?int
    {
        return $this->stoppedTaskCount;
    }
    /**
     * The count of stopped task
     *
     * @param int|null $stoppedTaskCount
     *
     * @return self
     */
    public function setStoppedTaskCount(?int $stoppedTaskCount) : self
    {
        $this->stoppedTaskCount = $stoppedTaskCount;
        return $this;
    }
}