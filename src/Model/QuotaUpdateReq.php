<?php

namespace Harbor\Api\Model;

class QuotaUpdateReq
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
}