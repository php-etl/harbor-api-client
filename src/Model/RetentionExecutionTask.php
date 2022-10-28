<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionExecutionTask
{
    /**
     *
     *
     * @var string|null
     */
    protected $status;
    /**
     *
     *
     * @var int|null
     */
    protected $retained;
    /**
     *
     *
     * @var string|null
     */
    protected $jobId;
    /**
     *
     *
     * @var string|null
     */
    protected $repository;
    /**
     *
     *
     * @var int|null
     */
    protected $statusCode;
    /**
     *
     *
     * @var string|null
     */
    protected $startTime;
    /**
     *
     *
     * @var int|null
     */
    protected $statusRevision;
    /**
     *
     *
     * @var string|null
     */
    protected $endTime;
    /**
     *
     *
     * @var int|null
     */
    protected $total;
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
    protected $executionId;
    /**
     *
     *
     * @return string|null
     */
    public function getStatus(): ?string
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
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getRetained(): ?int
    {
        return $this->retained;
    }
    /**
     *
     *
     * @param int|null $retained
     *
     * @return self
     */
    public function setRetained(?int $retained): self
    {
        $this->retained = $retained;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getJobId(): ?string
    {
        return $this->jobId;
    }
    /**
     *
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
     *
     *
     * @return string|null
     */
    public function getRepository(): ?string
    {
        return $this->repository;
    }
    /**
     *
     *
     * @param string|null $repository
     *
     * @return self
     */
    public function setRepository(?string $repository): self
    {
        $this->repository = $repository;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }
    /**
     *
     *
     * @param int|null $statusCode
     *
     * @return self
     */
    public function setStatusCode(?int $statusCode): self
    {
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getStartTime(): ?string
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
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getStatusRevision(): ?int
    {
        return $this->statusRevision;
    }
    /**
     *
     *
     * @param int|null $statusRevision
     *
     * @return self
     */
    public function setStatusRevision(?int $statusRevision): self
    {
        $this->statusRevision = $statusRevision;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEndTime(): ?string
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
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }
    /**
     *
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
     *
     *
     * @return int|null
     */
    public function getId(): ?int
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
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getExecutionId(): ?int
    {
        return $this->executionId;
    }
    /**
     *
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
}
