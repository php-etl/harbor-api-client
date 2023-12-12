<?php

namespace Gyroscops\Harbor\Api\Model;

class ScheduleObj
{
    /**
    * The schedule type. The valid values are 'Hourly', 'Daily', 'Weekly', 'Custom', 'Manual', 'None' and 'Schedule'.
    'Manual' means to trigger it right away, 'Schedule' means to trigger it by a specified cron schedule and 
    'None' means to cancel the schedule.
    
    *
    * @var string|null
    */
    protected $type;
    /**
     * A cron expression, a time-based job scheduler.
     *
     * @var string|null
     */
    protected $cron;
    /**
     * The next time to schedule to run the job.
     *
     * @var \DateTimeInterface|null
     */
    protected $nextScheduledTime;
    /**
    * The schedule type. The valid values are 'Hourly', 'Daily', 'Weekly', 'Custom', 'Manual', 'None' and 'Schedule'.
    'Manual' means to trigger it right away, 'Schedule' means to trigger it by a specified cron schedule and 
    'None' means to cancel the schedule.
    
    *
    * @return string|null
    */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
    * The schedule type. The valid values are 'Hourly', 'Daily', 'Weekly', 'Custom', 'Manual', 'None' and 'Schedule'.
    'Manual' means to trigger it right away, 'Schedule' means to trigger it by a specified cron schedule and 
    'None' means to cancel the schedule.
    
    *
    * @param string|null $type
    *
    * @return self
    */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * A cron expression, a time-based job scheduler.
     *
     * @return string|null
     */
    public function getCron() : ?string
    {
        return $this->cron;
    }
    /**
     * A cron expression, a time-based job scheduler.
     *
     * @param string|null $cron
     *
     * @return self
     */
    public function setCron(?string $cron) : self
    {
        $this->cron = $cron;
        return $this;
    }
    /**
     * The next time to schedule to run the job.
     *
     * @return \DateTimeInterface|null
     */
    public function getNextScheduledTime() : ?\DateTimeInterface
    {
        return $this->nextScheduledTime;
    }
    /**
     * The next time to schedule to run the job.
     *
     * @param \DateTimeInterface|null $nextScheduledTime
     *
     * @return self
     */
    public function setNextScheduledTime(?\DateTimeInterface $nextScheduledTime) : self
    {
        $this->nextScheduledTime = $nextScheduledTime;
        return $this;
    }
}