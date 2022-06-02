<?php

namespace Harbor\Api\Model;

class ProjectSummaryQuota
{
    /**
     * 
     *
     * @var int[]
     */
    protected $hard;
    /**
     * 
     *
     * @var int[]
     */
    protected $used;
    /**
     * 
     *
     * @return int[]
     */
    public function getHard() : iterable
    {
        return $this->hard;
    }
    /**
     * 
     *
     * @param int[] $hard
     *
     * @return self
     */
    public function setHard(iterable $hard) : self
    {
        $this->hard = $hard;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getUsed() : iterable
    {
        return $this->used;
    }
    /**
     * 
     *
     * @param int[] $used
     *
     * @return self
     */
    public function setUsed(iterable $used) : self
    {
        $this->used = $used;
        return $this;
    }
}