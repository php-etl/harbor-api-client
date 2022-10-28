<?php

namespace Gyroscops\Harbor\Api\Model;

class ConfigurationsScanAllPolicyParameter
{
    /**
     * The offset in seconds of UTC 0 o'clock, only valid when the policy type is "daily"
     *
     * @var int|null
     */
    protected $dailyTime;
    /**
     * The offset in seconds of UTC 0 o'clock, only valid when the policy type is "daily"
     *
     * @return int|null
     */
    public function getDailyTime(): ?int
    {
        return $this->dailyTime;
    }
    /**
     * The offset in seconds of UTC 0 o'clock, only valid when the policy type is "daily"
     *
     * @param int|null $dailyTime
     *
     * @return self
     */
    public function setDailyTime(?int $dailyTime): self
    {
        $this->dailyTime = $dailyTime;
        return $this;
    }
}
