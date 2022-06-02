<?php

namespace Harbor\Api\Model;

class WebhookLastTrigger
{
    /**
     * Whether or not the webhook policy enabled.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The creation time of webhook policy.
     *
     * @var string
     */
    protected $creationTime;
    /**
     * The webhook event type.
     *
     * @var string
     */
    protected $eventType;
    /**
     * The last trigger time of webhook policy.
     *
     * @var string
     */
    protected $lastTriggerTime;
    /**
     * Whether or not the webhook policy enabled.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Whether or not the webhook policy enabled.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * The creation time of webhook policy.
     *
     * @return string
     */
    public function getCreationTime() : string
    {
        return $this->creationTime;
    }
    /**
     * The creation time of webhook policy.
     *
     * @param string $creationTime
     *
     * @return self
     */
    public function setCreationTime(string $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The webhook event type.
     *
     * @return string
     */
    public function getEventType() : string
    {
        return $this->eventType;
    }
    /**
     * The webhook event type.
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType) : self
    {
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * The last trigger time of webhook policy.
     *
     * @return string
     */
    public function getLastTriggerTime() : string
    {
        return $this->lastTriggerTime;
    }
    /**
     * The last trigger time of webhook policy.
     *
     * @param string $lastTriggerTime
     *
     * @return self
     */
    public function setLastTriggerTime(string $lastTriggerTime) : self
    {
        $this->lastTriggerTime = $lastTriggerTime;
        return $this;
    }
}