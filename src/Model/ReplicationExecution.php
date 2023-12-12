<?php

namespace Gyroscops\Harbor\Api\Model;

class ReplicationExecution
{
    /**
     * The ID of the execution
     *
     * @var int|null
     */
    protected $id;
    /**
     * The ID if the policy that the execution belongs to
     *
     * @var int|null
     */
    protected $policyId;
    /**
     * The status of the execution
     *
     * @var string|null
     */
    protected $status;
    /**
     * The trigger mode
     *
     * @var string|null
     */
    protected $trigger;
    /**
     * The start time
     *
     * @var \DateTime|null
     */
    protected $startTime;
    /**
     * The end time
     *
     * @var \DateTime|null
     */
    protected $endTime;
    /**
     * The status text
     *
     * @var string|null
     */
    protected $statusText;
    /**
     * The total count of all executions
     *
     * @var int|null
     */
    protected $total;
    /**
     * The count of failed executions
     *
     * @var int|null
     */
    protected $failed;
    /**
     * The count of succeed executions
     *
     * @var int|null
     */
    protected $succeed;
    /**
     * The count of in_progress executions
     *
     * @var int|null
     */
    protected $inProgress;
    /**
     * The count of stopped executions
     *
     * @var int|null
     */
    protected $stopped;
    /**
     * The ID of the execution
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of the execution
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
     * The ID if the policy that the execution belongs to
     *
     * @return int|null
     */
    public function getPolicyId() : ?int
    {
        return $this->policyId;
    }
    /**
     * The ID if the policy that the execution belongs to
     *
     * @param int|null $policyId
     *
     * @return self
     */
    public function setPolicyId(?int $policyId) : self
    {
        $this->policyId = $policyId;
        return $this;
    }
    /**
     * The status of the execution
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The status of the execution
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
     * The trigger mode
     *
     * @return string|null
     */
    public function getTrigger() : ?string
    {
        return $this->trigger;
    }
    /**
     * The trigger mode
     *
     * @param string|null $trigger
     *
     * @return self
     */
    public function setTrigger(?string $trigger) : self
    {
        $this->trigger = $trigger;
        return $this;
    }
    /**
     * The start time
     *
     * @return \DateTime|null
     */
    public function getStartTime() : ?\DateTime
    {
        return $this->startTime;
    }
    /**
     * The start time
     *
     * @param \DateTime|null $startTime
     *
     * @return self
     */
    public function setStartTime(?\DateTime $startTime) : self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * The end time
     *
     * @return \DateTime|null
     */
    public function getEndTime() : ?\DateTime
    {
        return $this->endTime;
    }
    /**
     * The end time
     *
     * @param \DateTime|null $endTime
     *
     * @return self
     */
    public function setEndTime(?\DateTime $endTime) : self
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * The status text
     *
     * @return string|null
     */
    public function getStatusText() : ?string
    {
        return $this->statusText;
    }
    /**
     * The status text
     *
     * @param string|null $statusText
     *
     * @return self
     */
    public function setStatusText(?string $statusText) : self
    {
        $this->statusText = $statusText;
        return $this;
    }
    /**
     * The total count of all executions
     *
     * @return int|null
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * The total count of all executions
     *
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total) : self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * The count of failed executions
     *
     * @return int|null
     */
    public function getFailed() : ?int
    {
        return $this->failed;
    }
    /**
     * The count of failed executions
     *
     * @param int|null $failed
     *
     * @return self
     */
    public function setFailed(?int $failed) : self
    {
        $this->failed = $failed;
        return $this;
    }
    /**
     * The count of succeed executions
     *
     * @return int|null
     */
    public function getSucceed() : ?int
    {
        return $this->succeed;
    }
    /**
     * The count of succeed executions
     *
     * @param int|null $succeed
     *
     * @return self
     */
    public function setSucceed(?int $succeed) : self
    {
        $this->succeed = $succeed;
        return $this;
    }
    /**
     * The count of in_progress executions
     *
     * @return int|null
     */
    public function getInProgress() : ?int
    {
        return $this->inProgress;
    }
    /**
     * The count of in_progress executions
     *
     * @param int|null $inProgress
     *
     * @return self
     */
    public function setInProgress(?int $inProgress) : self
    {
        $this->inProgress = $inProgress;
        return $this;
    }
    /**
     * The count of stopped executions
     *
     * @return int|null
     */
    public function getStopped() : ?int
    {
        return $this->stopped;
    }
    /**
     * The count of stopped executions
     *
     * @param int|null $stopped
     *
     * @return self
     */
    public function setStopped(?int $stopped) : self
    {
        $this->stopped = $stopped;
        return $this;
    }
}