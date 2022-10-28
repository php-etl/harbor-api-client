<?php

namespace Gyroscops\Harbor\Api\Model;

class Stats
{
    /**
     * The metrics data for the each status
     *
     * @var int[]|null
     */
    protected $metrics;
    /**
     * The number of the finished scan processes triggered by the scan all action
     *
     * @var int|null
     */
    protected $completed;
    /**
     * The total number of scan processes triggered by the scan all action
     *
     * @var int|null
     */
    protected $total;
    /**
     * A flag indicating job status of scan all .
     *
     * @var bool|null
     */
    protected $ongoing;
    /**
     * The requester identity which usually uses the ID of the scan all job
     *
     * @var string|null
     */
    protected $requester;
    /**
     * The metrics data for the each status
     *
     * @return int[]|null
     */
    public function getMetrics(): ?iterable
    {
        return $this->metrics;
    }
    /**
     * The metrics data for the each status
     *
     * @param int[]|null $metrics
     *
     * @return self
     */
    public function setMetrics(?iterable $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }
    /**
     * The number of the finished scan processes triggered by the scan all action
     *
     * @return int|null
     */
    public function getCompleted(): ?int
    {
        return $this->completed;
    }
    /**
     * The number of the finished scan processes triggered by the scan all action
     *
     * @param int|null $completed
     *
     * @return self
     */
    public function setCompleted(?int $completed): self
    {
        $this->completed = $completed;
        return $this;
    }
    /**
     * The total number of scan processes triggered by the scan all action
     *
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }
    /**
     * The total number of scan processes triggered by the scan all action
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
     * A flag indicating job status of scan all .
     *
     * @return bool|null
     */
    public function getOngoing(): ?bool
    {
        return $this->ongoing;
    }
    /**
     * A flag indicating job status of scan all .
     *
     * @param bool|null $ongoing
     *
     * @return self
     */
    public function setOngoing(?bool $ongoing): self
    {
        $this->ongoing = $ongoing;
        return $this;
    }
    /**
     * The requester identity which usually uses the ID of the scan all job
     *
     * @return string|null
     */
    public function getRequester(): ?string
    {
        return $this->requester;
    }
    /**
     * The requester identity which usually uses the ID of the scan all job
     *
     * @param string|null $requester
     *
     * @return self
     */
    public function setRequester(?string $requester): self
    {
        $this->requester = $requester;
        return $this;
    }
}
