<?php

namespace Gyroscops\Harbor\Api\Model;

class ReplicationTask
{
    /**
     * The ID of the task
     *
     * @var int|null
     */
    protected $id;
    /**
     * The ID of the execution that the task belongs to
     *
     * @var int|null
     */
    protected $executionId;
    /**
     * The status of the task
     *
     * @var string|null
     */
    protected $status;
    /**
     * The ID of the underlying job that the task related to
     *
     * @var string|null
     */
    protected $jobId;
    /**
     * The operation of the task
     *
     * @var string|null
     */
    protected $operation;
    /**
     * The type of the resource that the task operates
     *
     * @var string|null
     */
    protected $resourceType;
    /**
     * The source resource that the task operates
     *
     * @var string|null
     */
    protected $srcResource;
    /**
     * The destination resource that the task operates
     *
     * @var string|null
     */
    protected $dstResource;
    /**
     * The start time of the task
     *
     * @var \DateTime|null
     */
    protected $startTime;
    /**
     * The end time of the task
     *
     * @var \DateTime|null
     */
    protected $endTime;
    /**
     * The ID of the task
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of the task
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
     * The ID of the execution that the task belongs to
     *
     * @return int|null
     */
    public function getExecutionId() : ?int
    {
        return $this->executionId;
    }
    /**
     * The ID of the execution that the task belongs to
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
     * The status of the task
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The status of the task
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
     * The ID of the underlying job that the task related to
     *
     * @return string|null
     */
    public function getJobId() : ?string
    {
        return $this->jobId;
    }
    /**
     * The ID of the underlying job that the task related to
     *
     * @param string|null $jobId
     *
     * @return self
     */
    public function setJobId(?string $jobId) : self
    {
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * The operation of the task
     *
     * @return string|null
     */
    public function getOperation() : ?string
    {
        return $this->operation;
    }
    /**
     * The operation of the task
     *
     * @param string|null $operation
     *
     * @return self
     */
    public function setOperation(?string $operation) : self
    {
        $this->operation = $operation;
        return $this;
    }
    /**
     * The type of the resource that the task operates
     *
     * @return string|null
     */
    public function getResourceType() : ?string
    {
        return $this->resourceType;
    }
    /**
     * The type of the resource that the task operates
     *
     * @param string|null $resourceType
     *
     * @return self
     */
    public function setResourceType(?string $resourceType) : self
    {
        $this->resourceType = $resourceType;
        return $this;
    }
    /**
     * The source resource that the task operates
     *
     * @return string|null
     */
    public function getSrcResource() : ?string
    {
        return $this->srcResource;
    }
    /**
     * The source resource that the task operates
     *
     * @param string|null $srcResource
     *
     * @return self
     */
    public function setSrcResource(?string $srcResource) : self
    {
        $this->srcResource = $srcResource;
        return $this;
    }
    /**
     * The destination resource that the task operates
     *
     * @return string|null
     */
    public function getDstResource() : ?string
    {
        return $this->dstResource;
    }
    /**
     * The destination resource that the task operates
     *
     * @param string|null $dstResource
     *
     * @return self
     */
    public function setDstResource(?string $dstResource) : self
    {
        $this->dstResource = $dstResource;
        return $this;
    }
    /**
     * The start time of the task
     *
     * @return \DateTime|null
     */
    public function getStartTime() : ?\DateTime
    {
        return $this->startTime;
    }
    /**
     * The start time of the task
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
     * The end time of the task
     *
     * @return \DateTime|null
     */
    public function getEndTime() : ?\DateTime
    {
        return $this->endTime;
    }
    /**
     * The end time of the task
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
}