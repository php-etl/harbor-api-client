<?php

namespace Gyroscops\Harbor\Api\Model;

class AdminJobSchedule
{
    /**
     * The parameters of admin job
     *
     * @var bool[]
     */
    protected $parameters;
    /**
     * 
     *
     * @var AdminJobScheduleObj
     */
    protected $schedule;
    /**
     * The parameters of admin job
     *
     * @return bool[]
     */
    public function getParameters() : iterable
    {
        return $this->parameters;
    }
    /**
     * The parameters of admin job
     *
     * @param bool[] $parameters
     *
     * @return self
     */
    public function setParameters(iterable $parameters) : self
    {
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * 
     *
     * @return AdminJobScheduleObj
     */
    public function getSchedule() : AdminJobScheduleObj
    {
        return $this->schedule;
    }
    /**
     * 
     *
     * @param AdminJobScheduleObj $schedule
     *
     * @return self
     */
    public function setSchedule(AdminJobScheduleObj $schedule) : self
    {
        $this->schedule = $schedule;
        return $this;
    }
}