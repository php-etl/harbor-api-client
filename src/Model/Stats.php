<?php

namespace Harbor\Api\Model;

class Stats
{
    /**
     * The metrics data for the each status
     *
     * @var int[]
     */
    protected $metrics;
    /**
     * The number of the finished scan processes triggered by the scan all action
     *
     * @var int
     */
    protected $completed;
    /**
     * The total number of scan processes triggered by the scan all action
     *
     * @var int
     */
    protected $total;
    /**
     * A flag indicating job status of scan all .
     *
     * @var bool
     */
    protected $ongoing;
    /**
     * The requester identity which usually uses the ID of the scan all job
     *
     * @var string
     */
    protected $requester;
    /**
     * The metrics data for the each status
     *
     * @return int[]
     */
    public function getMetrics() : iterable
    {
        return $this->metrics;
    }
    /**
     * The metrics data for the each status
     *
     * @param int[] $metrics
     *
     * @return self
     */
    public function setMetrics(iterable $metrics) : self
    {
        $this->metrics = $metrics;
        return $this;
    }
    /**
     * The number of the finished scan processes triggered by the scan all action
     *
     * @return int
     */
    public function getCompleted() : int
    {
        return $this->completed;
    }
    /**
     * The number of the finished scan processes triggered by the scan all action
     *
     * @param int $completed
     *
     * @return self
     */
    public function setCompleted(int $completed) : self
    {
        $this->completed = $completed;
        return $this;
    }
    /**
     * The total number of scan processes triggered by the scan all action
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * The total number of scan processes triggered by the scan all action
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
     * A flag indicating job status of scan all .
     *
     * @return bool
     */
    public function getOngoing() : bool
    {
        return $this->ongoing;
    }
    /**
     * A flag indicating job status of scan all .
     *
     * @param bool $ongoing
     *
     * @return self
     */
    public function setOngoing(bool $ongoing) : self
    {
        $this->ongoing = $ongoing;
        return $this;
    }
    /**
     * The requester identity which usually uses the ID of the scan all job
     *
     * @return string
     */
    public function getRequester() : string
    {
        return $this->requester;
    }
    /**
     * The requester identity which usually uses the ID of the scan all job
     *
     * @param string $requester
     *
     * @return self
     */
    public function setRequester(string $requester) : self
    {
        $this->requester = $requester;
        return $this;
    }
}