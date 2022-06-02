<?php

namespace Harbor\Api\Model;

class SupportedWebhookEventTypes
{
    /**
     * 
     *
     * @var string[]
     */
    protected $eventType;
    /**
     * 
     *
     * @var string[]
     */
    protected $notifyType;
    /**
     * 
     *
     * @return string[]
     */
    public function getEventType() : array
    {
        return $this->eventType;
    }
    /**
     * 
     *
     * @param string[] $eventType
     *
     * @return self
     */
    public function setEventType(array $eventType) : self
    {
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getNotifyType() : array
    {
        return $this->notifyType;
    }
    /**
     * 
     *
     * @param string[] $notifyType
     *
     * @return self
     */
    public function setNotifyType(array $notifyType) : self
    {
        $this->notifyType = $notifyType;
        return $this;
    }
}