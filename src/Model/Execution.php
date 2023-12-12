<?php

namespace Gyroscops\Harbor\Api\Model;

class Execution
{
    /**
     * The ID of execution
     *
     * @var int|null
     */
    protected $id;
    /**
     * The vendor type of execution
     *
     * @var string|null
     */
    protected $vendorType;
    /**
     * The vendor id of execution
     *
     * @var int|null
     */
    protected $vendorId;
    /**
     * The status of execution
     *
     * @var string|null
     */
    protected $status;
    /**
     * The status message of execution
     *
     * @var string|null
     */
    protected $statusMessage;
    /**
     * 
     *
     * @var Metrics|null
     */
    protected $metrics;
    /**
     * The trigger of execution
     *
     * @var string|null
     */
    protected $trigger;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $extraAttrs;
    /**
     * The start time of execution
     *
     * @var string|null
     */
    protected $startTime;
    /**
     * The end time of execution
     *
     * @var string|null
     */
    protected $endTime;
    /**
     * The ID of execution
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of execution
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
     * The vendor type of execution
     *
     * @return string|null
     */
    public function getVendorType() : ?string
    {
        return $this->vendorType;
    }
    /**
     * The vendor type of execution
     *
     * @param string|null $vendorType
     *
     * @return self
     */
    public function setVendorType(?string $vendorType) : self
    {
        $this->vendorType = $vendorType;
        return $this;
    }
    /**
     * The vendor id of execution
     *
     * @return int|null
     */
    public function getVendorId() : ?int
    {
        return $this->vendorId;
    }
    /**
     * The vendor id of execution
     *
     * @param int|null $vendorId
     *
     * @return self
     */
    public function setVendorId(?int $vendorId) : self
    {
        $this->vendorId = $vendorId;
        return $this;
    }
    /**
     * The status of execution
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The status of execution
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
     * The status message of execution
     *
     * @return string|null
     */
    public function getStatusMessage() : ?string
    {
        return $this->statusMessage;
    }
    /**
     * The status message of execution
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
     * 
     *
     * @return Metrics|null
     */
    public function getMetrics() : ?Metrics
    {
        return $this->metrics;
    }
    /**
     * 
     *
     * @param Metrics|null $metrics
     *
     * @return self
     */
    public function setMetrics(?Metrics $metrics) : self
    {
        $this->metrics = $metrics;
        return $this;
    }
    /**
     * The trigger of execution
     *
     * @return string|null
     */
    public function getTrigger() : ?string
    {
        return $this->trigger;
    }
    /**
     * The trigger of execution
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
     * The start time of execution
     *
     * @return string|null
     */
    public function getStartTime() : ?string
    {
        return $this->startTime;
    }
    /**
     * The start time of execution
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
     * The end time of execution
     *
     * @return string|null
     */
    public function getEndTime() : ?string
    {
        return $this->endTime;
    }
    /**
     * The end time of execution
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