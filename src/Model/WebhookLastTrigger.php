<?php

namespace Gyroscops\Harbor\Api\Model;

class WebhookLastTrigger
{
    /**
     * The webhook policy name.
     *
     * @var string|null
     */
    protected $policyName;
    /**
     * The webhook event type.
     *
     * @var string|null
     */
    protected $eventType;
    /**
     * Whether or not the webhook policy enabled.
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * The creation time of webhook policy.
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * The last trigger time of webhook policy.
     *
     * @var \DateTime|null
     */
    protected $lastTriggerTime;
    /**
     * The webhook policy name.
     *
     * @return string|null
     */
    public function getPolicyName() : ?string
    {
        return $this->policyName;
    }
    /**
     * The webhook policy name.
     *
     * @param string|null $policyName
     *
     * @return self
     */
    public function setPolicyName(?string $policyName) : self
    {
        $this->policyName = $policyName;
        return $this;
    }
    /**
     * The webhook event type.
     *
     * @return string|null
     */
    public function getEventType() : ?string
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
    public function setEventType(?string $eventType) : self
    {
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * Whether or not the webhook policy enabled.
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
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
    public function setEnabled(?bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * The creation time of webhook policy.
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * The creation time of webhook policy.
     *
     * @param \DateTime|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?\DateTime $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The last trigger time of webhook policy.
     *
     * @return \DateTime|null
     */
    public function getLastTriggerTime() : ?\DateTime
    {
        return $this->lastTriggerTime;
    }
    /**
     * The last trigger time of webhook policy.
     *
     * @param \DateTime|null $lastTriggerTime
     *
     * @return self
     */
    public function setLastTriggerTime(?\DateTime $lastTriggerTime) : self
    {
        $this->lastTriggerTime = $lastTriggerTime;
        return $this;
    }
}