<?php

namespace Harbor\Api\Model;

class RetentionExecutionTask
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
     * @var int
     */
    protected $retained;
    /**
     * 
     *
     * @var string
     */
    protected $jobId;
    /**
     * 
     *
     * @var string
     */
    protected $repository;
    /**
     * 
     *
     * @var int
     */
    protected $statusCode;
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
    protected $statusRevision;
    /**
     * 
     *
     * @var string
     */
    protected $endTime;
    /**
     * 
     *
     * @var int
     */
    protected $total;
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
    protected $executionId;
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
     * @return int
     */
    public function getRetained() : int
    {
        return $this->retained;
    }
    /**
     * 
     *
     * @param int $retained
     *
     * @return self
     */
    public function setRetained(int $retained) : self
    {
        $this->retained = $retained;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJobId() : string
    {
        return $this->jobId;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getRepository() : string
    {
        return $this->repository;
    }
    /**
     * 
     *
     * @param string $repository
     *
     * @return self
     */
    public function setRepository(string $repository) : self
    {
        $this->repository = $repository;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStatusCode() : int
    {
        return $this->statusCode;
    }
    /**
     * 
     *
     * @param int $statusCode
     *
     * @return self
     */
    public function setStatusCode(int $statusCode) : self
    {
        $this->statusCode = $statusCode;
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
    public function getStatusRevision() : int
    {
        return $this->statusRevision;
    }
    /**
     * 
     *
     * @param int $statusRevision
     *
     * @return self
     */
    public function setStatusRevision(int $statusRevision) : self
    {
        $this->statusRevision = $statusRevision;
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
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * 
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
    public function getExecutionId() : int
    {
        return $this->executionId;
    }
    /**
     * 
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
}