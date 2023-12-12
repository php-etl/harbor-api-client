<?php

namespace Gyroscops\Harbor\Api\Model;

class WorkerPool
{
    /**
     * the process id of jobservice
     *
     * @var int|null
     */
    protected $pid;
    /**
     * the id of the worker pool
     *
     * @var string|null
     */
    protected $workerPoolId;
    /**
     * The start time of the work pool
     *
     * @var \DateTime|null
     */
    protected $startAt;
    /**
     * The heartbeat time of the work pool
     *
     * @var \DateTime|null
     */
    protected $heartbeatAt;
    /**
     * The concurrency of the work pool
     *
     * @var int|null
     */
    protected $concurrency;
    /**
     * The host of the work pool
     *
     * @var string|null
     */
    protected $host;
    /**
     * the process id of jobservice
     *
     * @return int|null
     */
    public function getPid() : ?int
    {
        return $this->pid;
    }
    /**
     * the process id of jobservice
     *
     * @param int|null $pid
     *
     * @return self
     */
    public function setPid(?int $pid) : self
    {
        $this->pid = $pid;
        return $this;
    }
    /**
     * the id of the worker pool
     *
     * @return string|null
     */
    public function getWorkerPoolId() : ?string
    {
        return $this->workerPoolId;
    }
    /**
     * the id of the worker pool
     *
     * @param string|null $workerPoolId
     *
     * @return self
     */
    public function setWorkerPoolId(?string $workerPoolId) : self
    {
        $this->workerPoolId = $workerPoolId;
        return $this;
    }
    /**
     * The start time of the work pool
     *
     * @return \DateTime|null
     */
    public function getStartAt() : ?\DateTime
    {
        return $this->startAt;
    }
    /**
     * The start time of the work pool
     *
     * @param \DateTime|null $startAt
     *
     * @return self
     */
    public function setStartAt(?\DateTime $startAt) : self
    {
        $this->startAt = $startAt;
        return $this;
    }
    /**
     * The heartbeat time of the work pool
     *
     * @return \DateTime|null
     */
    public function getHeartbeatAt() : ?\DateTime
    {
        return $this->heartbeatAt;
    }
    /**
     * The heartbeat time of the work pool
     *
     * @param \DateTime|null $heartbeatAt
     *
     * @return self
     */
    public function setHeartbeatAt(?\DateTime $heartbeatAt) : self
    {
        $this->heartbeatAt = $heartbeatAt;
        return $this;
    }
    /**
     * The concurrency of the work pool
     *
     * @return int|null
     */
    public function getConcurrency() : ?int
    {
        return $this->concurrency;
    }
    /**
     * The concurrency of the work pool
     *
     * @param int|null $concurrency
     *
     * @return self
     */
    public function setConcurrency(?int $concurrency) : self
    {
        $this->concurrency = $concurrency;
        return $this;
    }
    /**
     * The host of the work pool
     *
     * @return string|null
     */
    public function getHost() : ?string
    {
        return $this->host;
    }
    /**
     * The host of the work pool
     *
     * @param string|null $host
     *
     * @return self
     */
    public function setHost(?string $host) : self
    {
        $this->host = $host;
        return $this;
    }
}