<?php

namespace Gyroscops\Harbor\Api\Model;

class QuotaUpdateReq
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
}