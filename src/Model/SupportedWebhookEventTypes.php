<?php

namespace Gyroscops\Harbor\Api\Model;

class SupportedWebhookEventTypes
{
    /**
     *
     *
     * @var string[]|null
     */
    protected $eventType;
    /**
     *
     *
     * @var string[]|null
     */
    protected $notifyType;
    /**
     *
     *
     * @return string[]|null
     */
    public function getEventType(): ?array
    {
        return $this->eventType;
    }
    /**
     *
     *
     * @param string[]|null $eventType
     *
     * @return self
     */
    public function setEventType(?array $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getNotifyType(): ?array
    {
        return $this->notifyType;
    }
    /**
     *
     *
     * @param string[]|null $notifyType
     *
     * @return self
     */
    public function setNotifyType(?array $notifyType): self
    {
        $this->notifyType = $notifyType;
        return $this;
    }
}
