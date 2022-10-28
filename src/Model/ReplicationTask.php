<?php

namespace Gyroscops\Harbor\Api\Model;

class ReplicationTask
{
    /**
     * The status
     *
     * @var string|null
     */
    protected $status;
    /**
     * The job ID
     *
     * @var string|null
     */
    protected $jobId;
    /**
     * The start time
     *
     * @var string|null
     */
    protected $startTime;
    /**
     * The destination resource
     *
     * @var string|null
     */
    protected $dstResource;
    /**
     * The source resource
     *
     * @var string|null
     */
    protected $srcResource;
    /**
     * The resource type
     *
     * @var string|null
     */
    protected $resourceType;
    /**
     * The ID
     *
     * @var int|null
     */
    protected $id;
    /**
     * The execution ID
     *
     * @var int|null
     */
    protected $executionId;
    /**
     * The end time
     *
     * @var string|null
     */
    protected $endTime;
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
     * The job ID
     *
     * @return string|null
     */
    public function getJobId(): ?string
    {
        return $this->jobId;
    }
    /**
     * The job ID
     *
     * @param string|null $jobId
     *
     * @return self
     */
    public function setJobId(?string $jobId): self
    {
        $this->jobId = $jobId;
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
     * The destination resource
     *
     * @return string|null
     */
    public function getDstResource(): ?string
    {
        return $this->dstResource;
    }
    /**
     * The destination resource
     *
     * @param string|null $dstResource
     *
     * @return self
     */
    public function setDstResource(?string $dstResource): self
    {
        $this->dstResource = $dstResource;
        return $this;
    }
    /**
     * The source resource
     *
     * @return string|null
     */
    public function getSrcResource(): ?string
    {
        return $this->srcResource;
    }
    /**
     * The source resource
     *
     * @param string|null $srcResource
     *
     * @return self
     */
    public function setSrcResource(?string $srcResource): self
    {
        $this->srcResource = $srcResource;
        return $this;
    }
    /**
     * The resource type
     *
     * @return string|null
     */
    public function getResourceType(): ?string
    {
        return $this->resourceType;
    }
    /**
     * The resource type
     *
     * @param string|null $resourceType
     *
     * @return self
     */
    public function setResourceType(?string $resourceType): self
    {
        $this->resourceType = $resourceType;
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
     * The execution ID
     *
     * @return int|null
     */
    public function getExecutionId(): ?int
    {
        return $this->executionId;
    }
    /**
     * The execution ID
     *
     * @param int|null $executionId
     *
     * @return self
     */
    public function setExecutionId(?int $executionId): self
    {
        $this->executionId = $executionId;
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
}
