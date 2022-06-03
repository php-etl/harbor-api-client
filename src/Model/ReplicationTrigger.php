<?php

namespace Gyroscops\Harbor\Api\Model;

class ReplicationTrigger
{
    /**
     * The replication policy trigger type. The valid values are manual, event_based and scheduled.
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var TriggerSettings
     */
    protected $triggerSettings;
    /**
     * The replication policy trigger type. The valid values are manual, event_based and scheduled.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The replication policy trigger type. The valid values are manual, event_based and scheduled.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return TriggerSettings
     */
    public function getTriggerSettings() : TriggerSettings
    {
        return $this->triggerSettings;
    }
    /**
     * 
     *
     * @param TriggerSettings $triggerSettings
     *
     * @return self
     */
    public function setTriggerSettings(TriggerSettings $triggerSettings) : self
    {
        $this->triggerSettings = $triggerSettings;
        return $this;
    }
}