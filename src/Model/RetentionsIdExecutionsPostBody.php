<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionsIdExecutionsPostBody
{
    /**
     * 
     *
     * @var bool
     */
    protected $dryRun;
    /**
     * 
     *
     * @return bool
     */
    public function getDryRun() : bool
    {
        return $this->dryRun;
    }
    /**
     * 
     *
     * @param bool $dryRun
     *
     * @return self
     */
    public function setDryRun(bool $dryRun) : self
    {
        $this->dryRun = $dryRun;
        return $this;
    }
}