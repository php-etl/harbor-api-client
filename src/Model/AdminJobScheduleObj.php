<?php

namespace Gyroscops\Harbor\Api\Model;

class AdminJobScheduleObj
{
    /**
     * A cron expression, a time-based job scheduler.
     *
     * @var string|null
     */
    protected $cron;
    /**
    * The schedule type. The valid values are 'Hourly', 'Daily', 'Weekly', 'Custom', 'Manually' and 'None'.
    'Manually' means to trigger it right away and 'None' means to cancel the schedule.

    *
    * @var string|null
    */
    protected $type;
    /**
     * A cron expression, a time-based job scheduler.
     *
     * @return string|null
     */
    public function getCron(): ?string
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
    public function setCron(?string $cron): self
    {
        $this->cron = $cron;
        return $this;
    }
    /**
    * The schedule type. The valid values are 'Hourly', 'Daily', 'Weekly', 'Custom', 'Manually' and 'None'.
    'Manually' means to trigger it right away and 'None' means to cancel the schedule.

    *
    * @return string|null
    */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
    * The schedule type. The valid values are 'Hourly', 'Daily', 'Weekly', 'Custom', 'Manually' and 'None'.
    'Manually' means to trigger it right away and 'None' means to cancel the schedule.

    *
    * @param string|null $type
    *
    * @return self
    */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
