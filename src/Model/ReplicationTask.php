<?php

namespace Harbor\Api\Model;

class ReplicationTask
{
    /**
     * The status
     *
     * @var string
     */
    protected $status;
    /**
     * The job ID
     *
     * @var string
     */
    protected $jobId;
    /**
     * The start time
     *
     * @var string
     */
    protected $startTime;
    /**
     * The destination resource
     *
     * @var string
     */
    protected $dstResource;
    /**
     * The source resource
     *
     * @var string
     */
    protected $srcResource;
    /**
     * The resource type
     *
     * @var string
     */
    protected $resourceType;
    /**
     * The ID
     *
     * @var int
     */
    protected $id;
    /**
     * The execution ID
     *
     * @var int
     */
    protected $executionId;
    /**
     * The end time
     *
     * @var string
     */
    protected $endTime;
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
     * The job ID
     *
     * @return string
     */
    public function getJobId() : string
    {
        return $this->jobId;
    }
    /**
     * The job ID
     *
     * @param string $jobId
     *
     * @return self
     */
    public function setJobId(string $jobId) : self
    {
        $this->jobId = $jobId;
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
     * The destination resource
     *
     * @return string
     */
    public function getDstResource() : string
    {
        return $this->dstResource;
    }
    /**
     * The destination resource
     *
     * @param string $dstResource
     *
     * @return self
     */
    public function setDstResource(string $dstResource) : self
    {
        $this->dstResource = $dstResource;
        return $this;
    }
    /**
     * The source resource
     *
     * @return string
     */
    public function getSrcResource() : string
    {
        return $this->srcResource;
    }
    /**
     * The source resource
     *
     * @param string $srcResource
     *
     * @return self
     */
    public function setSrcResource(string $srcResource) : self
    {
        $this->srcResource = $srcResource;
        return $this;
    }
    /**
     * The resource type
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * The resource type
     *
     * @param string $resourceType
     *
     * @return self
     */
    public function setResourceType(string $resourceType) : self
    {
        $this->resourceType = $resourceType;
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
     * The execution ID
     *
     * @return int
     */
    public function getExecutionId() : int
    {
        return $this->executionId;
    }
    /**
     * The execution ID
     *
     * @param int $executionId
     *
     * @return self
     */
    public function setExecutionId(int $executionId) : self
    {
        $this->executionId = $executionId;
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
}