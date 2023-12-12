<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionExecution
{
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $policyId;
    /**
     * 
     *
     * @var string|null
     */
    protected $startTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $endTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $trigger;
    /**
     * 
     *
     * @var bool|null
     */
    protected $dryRun;
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
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
     * 
     *
     * @return int|null
     */
    public function getPolicyId() : ?int
    {
        return $this->policyId;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getStartTime() : ?string
    {
        return $this->startTime;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getEndTime() : ?string
    {
        return $this->endTime;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getTrigger() : ?string
    {
        return $this->trigger;
    }
    /**
     * 
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
     * 
     *
     * @return bool|null
     */
    public function getDryRun() : ?bool
    {
        return $this->dryRun;
    }
    /**
     * 
     *
     * @param bool|null $dryRun
     *
     * @return self
     */
    public function setDryRun(?bool $dryRun) : self
    {
        $this->dryRun = $dryRun;
        return $this;
    }
}