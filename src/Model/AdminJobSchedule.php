<?php

namespace Gyroscops\Harbor\Api\Model;

class AdminJobSchedule
{
    /**
     * The parameters of admin job
     *
     * @var bool[]|null
     */
    protected $parameters;
    /**
     *
     *
     * @var AdminJobScheduleObj|null
     */
    protected $schedule;
    /**
     * The parameters of admin job
     *
     * @return bool[]|null
     */
    public function getParameters(): ?iterable
    {
        return $this->parameters;
    }
    /**
     * The parameters of admin job
     *
     * @param bool[]|null $parameters
     *
     * @return self
     */
    public function setParameters(?iterable $parameters): self
    {
        $this->parameters = $parameters;
        return $this;
    }
    /**
     *
     *
     * @return AdminJobScheduleObj|null
     */
    public function getSchedule(): ?AdminJobScheduleObj
    {
        return $this->schedule;
    }
    /**
     *
     *
     * @param AdminJobScheduleObj|null $schedule
     *
     * @return self
     */
    public function setSchedule(?AdminJobScheduleObj $schedule): self
    {
        $this->schedule = $schedule;
        return $this;
    }
}
