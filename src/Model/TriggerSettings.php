<?php

namespace Gyroscops\Harbor\Api\Model;

class TriggerSettings
{
    /**
     * The cron string for scheduled trigger
     *
     * @var string|null
     */
    protected $cron;
    /**
     * The cron string for scheduled trigger
     *
     * @return string|null
     */
    public function getCron(): ?string
    {
        return $this->cron;
    }
    /**
     * The cron string for scheduled trigger
     *
     * @param string|null $cron
     *
     * @return self
     */
    public function setCron(?string $cron): self
    {
        $this->cron = $cron;
        return $this;
    }
}
