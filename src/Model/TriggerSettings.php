<?php

namespace Harbor\Api\Model;

class TriggerSettings
{
    /**
     * The cron string for scheduled trigger
     *
     * @var string
     */
    protected $cron;
    /**
     * The cron string for scheduled trigger
     *
     * @return string
     */
    public function getCron() : string
    {
        return $this->cron;
    }
    /**
     * The cron string for scheduled trigger
     *
     * @param string $cron
     *
     * @return self
     */
    public function setCron(string $cron) : self
    {
        $this->cron = $cron;
        return $this;
    }
}