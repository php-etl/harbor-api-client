<?php

namespace Harbor\Api\Model;

class ReplicationExecution
{
    /**
     * The status
     *
     * @var string
     */
    protected $status;
    /**
     * The status text
     *
     * @var string
     */
    protected $statusText;
    /**
     * The trigger mode
     *
     * @var string
     */
    protected $trigger;
    /**
     * The start time
     *
     * @var string
     */
    protected $startTime;
    /**
     * The count of failed tasks
     *
     * @var int
     */
    protected $failed;
    /**
     * The count of succeed tasks
     *
     * @var int
     */
    protected $succeed;
    /**
     * The count of stopped tasks
     *
     * @var int
     */
    protected $stopped;
    /**
     * The end time
     *
     * @var string
     */
    protected $endTime;
    /**
     * The count of in_progress tasks
     *
     * @var int
     */
    protected $inProgress;
    /**
     * The total count of all tasks
     *
     * @var int
     */
    protected $total;
    /**
     * The ID
     *
     * @var int
     */
    protected $id;
    /**
     * The policy ID
     *
     * @var int
     */
    protected $policyId;
    /**
     * The status
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The status text
     *
     * @return string
     */
    public function getStatusText() : string
    {
        return $this->statusText;
    }
    /**
     * The status text
     *
     * @param string $statusText
     *
     * @return self
     */
    public function setStatusText(string $statusText) : self
    {
        $this->statusText = $statusText;
        return $this;
    }
    /**
     * The trigger mode
     *
     * @return string
     */
    public function getTrigger() : string
    {
        return $this->trigger;
    }
    /**
     * The trigger mode
     *
     * @param string $trigger
     *
     * @return self
     */
    public function setTrigger(string $trigger) : self
    {
        $this->trigger = $trigger;
        return $this;
    }
    /**
     * The start time
     *
     * @return string
     */
    public function getStartTime() : string
    {
        return $this->startTime;
    }
    /**
     * The start time
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime) : self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * The count of failed tasks
     *
     * @return int
     */
    public function getFailed() : int
    {
        return $this->failed;
    }
    /**
     * The count of failed tasks
     *
     * @param int $failed
     *
     * @return self
     */
    public function setFailed(int $failed) : self
    {
        $this->failed = $failed;
        return $this;
    }
    /**
     * The count of succeed tasks
     *
     * @return int
     */
    public function getSucceed() : int
    {
        return $this->succeed;
    }
    /**
     * The count of succeed tasks
     *
     * @param int $succeed
     *
     * @return self
     */
    public function setSucceed(int $succeed) : self
    {
        $this->succeed = $succeed;
        return $this;
    }
    /**
     * The count of stopped tasks
     *
     * @return int
     */
    public function getStopped() : int
    {
        return $this->stopped;
    }
    /**
     * The count of stopped tasks
     *
     * @param int $stopped
     *
     * @return self
     */
    public function setStopped(int $stopped) : self
    {
        $this->stopped = $stopped;
        return $this;
    }
    /**
     * The end time
     *
     * @return string
     */
    public function getEndTime() : string
    {
        return $this->endTime;
    }
    /**
     * The end time
     *
     * @param string $endTime
     *
     * @return self
     */
    public function setEndTime(string $endTime) : self
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * The count of in_progress tasks
     *
     * @return int
     */
    public function getInProgress() : int
    {
        return $this->inProgress;
    }
    /**
     * The count of in_progress tasks
     *
     * @param int $inProgress
     *
     * @return self
     */
    public function setInProgress(int $inProgress) : self
    {
        $this->inProgress = $inProgress;
        return $this;
    }
    /**
     * The total count of all tasks
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * The total count of all tasks
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * The ID
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The ID
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
     * The policy ID
     *
     * @return int
     */
    public function getPolicyId() : int
    {
        return $this->policyId;
    }
    /**
     * The policy ID
     *
     * @param int $policyId
     *
     * @return self
     */
    public function setPolicyId(int $policyId) : self
    {
        $this->policyId = $policyId;
        return $this;
    }
}