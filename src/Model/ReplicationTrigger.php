<?php

namespace Gyroscops\Harbor\Api\Model;

class ReplicationTrigger
{
    /**
     * The replication policy trigger type. The valid values are manual, event_based and scheduled.
     *
     * @var string|null
     */
    protected $type;
    /**
     *
     *
     * @var TriggerSettings|null
     */
    protected $triggerSettings;
    /**
     * The replication policy trigger type. The valid values are manual, event_based and scheduled.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The replication policy trigger type. The valid values are manual, event_based and scheduled.
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
    /**
     *
     *
     * @return TriggerSettings|null
     */
    public function getTriggerSettings(): ?TriggerSettings
    {
        return $this->triggerSettings;
    }
    /**
     *
     *
     * @param TriggerSettings|null $triggerSettings
     *
     * @return self
     */
    public function setTriggerSettings(?TriggerSettings $triggerSettings): self
    {
        $this->triggerSettings = $triggerSettings;
        return $this;
    }
}
