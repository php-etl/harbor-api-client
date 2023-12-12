<?php

namespace Gyroscops\Harbor\Api\Model;

class JobQueue
{
    /**
     * The type of the job queue
     *
     * @var string|null
     */
    protected $jobType;
    /**
     * The count of jobs in the job queue
     *
     * @var int|null
     */
    protected $count;
    /**
     * The latency the job queue (seconds)
     *
     * @var int|null
     */
    protected $latency;
    /**
     * The paused status of the job queue
     *
     * @var bool|null
     */
    protected $paused;
    /**
     * The type of the job queue
     *
     * @return string|null
     */
    public function getJobType() : ?string
    {
        return $this->jobType;
    }
    /**
     * The type of the job queue
     *
     * @param string|null $jobType
     *
     * @return self
     */
    public function setJobType(?string $jobType) : self
    {
        $this->jobType = $jobType;
        return $this;
    }
    /**
     * The count of jobs in the job queue
     *
     * @return int|null
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * The count of jobs in the job queue
     *
     * @param int|null $count
     *
     * @return self
     */
    public function setCount(?int $count) : self
    {
        $this->count = $count;
        return $this;
    }
    /**
     * The latency the job queue (seconds)
     *
     * @return int|null
     */
    public function getLatency() : ?int
    {
        return $this->latency;
    }
    /**
     * The latency the job queue (seconds)
     *
     * @param int|null $latency
     *
     * @return self
     */
    public function setLatency(?int $latency) : self
    {
        $this->latency = $latency;
        return $this;
    }
    /**
     * The paused status of the job queue
     *
     * @return bool|null
     */
    public function getPaused() : ?bool
    {
        return $this->paused;
    }
    /**
     * The paused status of the job queue
     *
     * @param bool|null $paused
     *
     * @return self
     */
    public function setPaused(?bool $paused) : self
    {
        $this->paused = $paused;
        return $this;
    }
}