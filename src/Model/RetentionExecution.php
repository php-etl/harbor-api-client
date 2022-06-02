<?php

namespace Harbor\Api\Model;

class RetentionExecution
{
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $trigger;
    /**
     * 
     *
     * @var string
     */
    protected $endTime;
    /**
     * 
     *
     * @var bool
     */
    protected $dryRun;
    /**
     * 
     *
     * @var string
     */
    protected $startTime;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $policyId;
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getTrigger() : string
    {
        return $this->trigger;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getEndTime() : string
    {
        return $this->endTime;
    }
    /**
     * 
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
     * 
     *
     * @return bool
     */
    public function getDryRun() : bool
    {
        return $this->dryRun;
    }
    /**
     * 
     *
     * @param bool $dryRun
     *
     * @return self
     */
    public function setDryRun(bool $dryRun) : self
    {
        $this->dryRun = $dryRun;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStartTime() : string
    {
        return $this->startTime;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getPolicyId() : int
    {
        return $this->policyId;
    }
    /**
     * 
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