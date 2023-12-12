<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionsIdExecutionsPostBody
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $dryRun;
    /**
     * 
     *
     * @return bool|null
     */
    public function getDryRun() : ?bool
    {
        return $this->dryRun;
    }
    /**
     * 
     *
     * @param bool|null $dryRun
     *
     * @return self
     */
    public function setDryRun(?bool $dryRun) : self
    {
        $this->dryRun = $dryRun;
        return $this;
    }
}