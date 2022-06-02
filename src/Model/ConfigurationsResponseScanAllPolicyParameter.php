<?php

namespace Harbor\Api\Model;

class ConfigurationsResponseScanAllPolicyParameter
{
    /**
     * The offset in seconds of UTC 0 o'clock, only valid when the policy type is "daily"
     *
     * @var int
     */
    protected $dailyTime;
    /**
     * The offset in seconds of UTC 0 o'clock, only valid when the policy type is "daily"
     *
     * @return int
     */
    public function getDailyTime() : int
    {
        return $this->dailyTime;
    }
    /**
     * The offset in seconds of UTC 0 o'clock, only valid when the policy type is "daily"
     *
     * @param int $dailyTime
     *
     * @return self
     */
    public function setDailyTime(int $dailyTime) : self
    {
        $this->dailyTime = $dailyTime;
        return $this;
    }
}