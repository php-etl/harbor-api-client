<?php

namespace Gyroscops\Harbor\Api\Model;

class ProjectSummaryQuota
{
    /**
     * 
     *
     * @var int[]|null
     */
    protected $hard;
    /**
     * 
     *
     * @var int[]|null
     */
    protected $used;
    /**
     * 
     *
     * @return int[]|null
     */
    public function getHard() : ?iterable
    {
        return $this->hard;
    }
    /**
     * 
     *
     * @param int[]|null $hard
     *
     * @return self
     */
    public function setHard(?iterable $hard) : self
    {
        $this->hard = $hard;
        return $this;
    }
    /**
     * 
     *
     * @return int[]|null
     */
    public function getUsed() : ?iterable
    {
        return $this->used;
    }
    /**
     * 
     *
     * @param int[]|null $used
     *
     * @return self
     */
    public function setUsed(?iterable $used) : self
    {
        $this->used = $used;
        return $this;
    }
}