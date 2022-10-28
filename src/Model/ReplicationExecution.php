<?php

namespace Gyroscops\Harbor\Api\Model;

class ReplicationExecution
{
    /**
     * The status
     *
     * @var string|null
     */
    protected $status;
    /**
     * The status text
     *
     * @var string|null
     */
    protected $statusText;
    /**
     * The trigger mode
     *
     * @var string|null
     */
    protected $trigger;
    /**
     * The start time
     *
     * @var string|null
     */
    protected $startTime;
    /**
     * The count of failed tasks
     *
     * @var int|null
     */
    protected $failed;
    /**
     * The count of succeed tasks
     *
     * @var int|null
     */
    protected $succeed;
    /**
     * The count of stopped tasks
     *
     * @var int|null
     */
    protected $stopped;
    /**
     * The end time
     *
     * @var string|null
     */
    protected $endTime;
    /**
     * The count of in_progress tasks
     *
     * @var int|null
     */
    protected $inProgress;
    /**
     * The total count of all tasks
     *
     * @var int|null
     */
    protected $total;
    /**
     * The ID
     *
     * @var int|null
     */
    protected $id;
    /**
     * The policy ID
     *
     * @var int|null
     */
    protected $policyId;
    /**
     * The status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The status
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The status text
     *
     * @return string|null
     */
    public function getStatusText(): ?string
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
    public function setStatusText(?string $statusText): self
    {
        $this->statusText = $statusText;
        return $this;
    }
    /**
     * The trigger mode
     *
     * @return string|null
     */
    public function getTrigger(): ?string
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
    public function setTrigger(?string $trigger): self
    {
        $this->trigger = $trigger;
        return $this;
    }
    /**
     * The start time
     *
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * The start time
     *
     * @param string|null $startTime
     *
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * The count of failed tasks
     *
     * @return int|null
     */
    public function getFailed(): ?int
    {
        return $this->failed;
    }
    /**
     * The count of failed tasks
     *
     * @param int|null $failed
     *
     * @return self
     */
    public function setFailed(?int $failed): self
    {
        $this->failed = $failed;
        return $this;
    }
    /**
     * The count of succeed tasks
     *
     * @return int|null
     */
    public function getSucceed(): ?int
    {
        return $this->succeed;
    }
    /**
     * The count of succeed tasks
     *
     * @param int|null $succeed
     *
     * @return self
     */
    public function setSucceed(?int $succeed): self
    {
        $this->succeed = $succeed;
        return $this;
    }
    /**
     * The count of stopped tasks
     *
     * @return int|null
     */
    public function getStopped(): ?int
    {
        return $this->stopped;
    }
    /**
     * The count of stopped tasks
     *
     * @param int|null $stopped
     *
     * @return self
     */
    public function setStopped(?int $stopped): self
    {
        $this->stopped = $stopped;
        return $this;
    }
    /**
     * The end time
     *
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }
    /**
     * The end time
     *
     * @param string|null $endTime
     *
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * The count of in_progress tasks
     *
     * @return int|null
     */
    public function getInProgress(): ?int
    {
        return $this->inProgress;
    }
    /**
     * The count of in_progress tasks
     *
     * @param int|null $inProgress
     *
     * @return self
     */
    public function setInProgress(?int $inProgress): self
    {
        $this->inProgress = $inProgress;
        return $this;
    }
    /**
     * The total count of all tasks
     *
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }
    /**
     * The total count of all tasks
     *
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * The ID
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * The ID
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The policy ID
     *
     * @return int|null
     */
    public function getPolicyId(): ?int
    {
        return $this->policyId;
    }
    /**
     * The policy ID
     *
     * @param int|null $policyId
     *
     * @return self
     */
    public function setPolicyId(?int $policyId): self
    {
        $this->policyId = $policyId;
        return $this;
    }
}
