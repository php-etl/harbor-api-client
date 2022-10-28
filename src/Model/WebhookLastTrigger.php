<?php

namespace Gyroscops\Harbor\Api\Model;

class WebhookLastTrigger
{
    /**
     * Whether or not the webhook policy enabled.
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * The creation time of webhook policy.
     *
     * @var string|null
     */
    protected $creationTime;
    /**
     * The webhook event type.
     *
     * @var string|null
     */
    protected $eventType;
    /**
     * The last trigger time of webhook policy.
     *
     * @var string|null
     */
    protected $lastTriggerTime;
    /**
     * Whether or not the webhook policy enabled.
     *
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
    /**
     * Whether or not the webhook policy enabled.
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * The creation time of webhook policy.
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * The creation time of webhook policy.
     *
     * @param string|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?string $creationTime): self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The webhook event type.
     *
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }
    /**
     * The webhook event type.
     *
     * @param string|null $eventType
     *
     * @return self
     */
    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * The last trigger time of webhook policy.
     *
     * @return string|null
     */
    public function getLastTriggerTime(): ?string
    {
        return $this->lastTriggerTime;
    }
    /**
     * The last trigger time of webhook policy.
     *
     * @param string|null $lastTriggerTime
     *
     * @return self
     */
    public function setLastTriggerTime(?string $lastTriggerTime): self
    {
        $this->lastTriggerTime = $lastTriggerTime;
        return $this;
    }
}
