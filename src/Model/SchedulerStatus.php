<?php

namespace Gyroscops\Harbor\Api\Model;

class SchedulerStatus
{
    /**
     * if the scheduler is paused
     *
     * @var bool|null
     */
    protected $paused;
    /**
     * if the scheduler is paused
     *
     * @return bool|null
     */
    public function getPaused() : ?bool
    {
        return $this->paused;
    }
    /**
     * if the scheduler is paused
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