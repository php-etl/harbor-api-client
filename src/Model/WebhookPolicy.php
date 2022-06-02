<?php

namespace Harbor\Api\Model;

class WebhookPolicy
{
    /**
     * The update time of the webhook policy.
     *
     * @var string
     */
    protected $updateTime;
    /**
     * The description of webhook policy.
     *
     * @var string
     */
    protected $description;
    /**
     * The creator of the webhook policy.
     *
     * @var string
     */
    protected $creator;
    /**
     * The create time of the webhook policy.
     *
     * @var string
     */
    protected $creationTime;
    /**
     * Whether the webhook policy is enabled or not.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * 
     *
     * @var WebhookTargetObject[]
     */
    protected $targets;
    /**
     * 
     *
     * @var string[]
     */
    protected $eventTypes;
    /**
     * The project ID of webhook policy.
     *
     * @var int
     */
    protected $projectId;
    /**
     * The webhook policy ID.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of webhook policy.
     *
     * @var string
     */
    protected $name;
    /**
     * The update time of the webhook policy.
     *
     * @return string
     */
    public function getUpdateTime() : string
    {
        return $this->updateTime;
    }
    /**
     * The update time of the webhook policy.
     *
     * @param string $updateTime
     *
     * @return self
     */
    public function setUpdateTime(string $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     * The description of webhook policy.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of webhook policy.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * The creator of the webhook policy.
     *
     * @return string
     */
    public function getCreator() : string
    {
        return $this->creator;
    }
    /**
     * The creator of the webhook policy.
     *
     * @param string $creator
     *
     * @return self
     */
    public function setCreator(string $creator) : self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * The create time of the webhook policy.
     *
     * @return string
     */
    public function getCreationTime() : string
    {
        return $this->creationTime;
    }
    /**
     * The create time of the webhook policy.
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
     * Whether the webhook policy is enabled or not.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Whether the webhook policy is enabled or not.
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
     * 
     *
     * @return WebhookTargetObject[]
     */
    public function getTargets() : array
    {
        return $this->targets;
    }
    /**
     * 
     *
     * @param WebhookTargetObject[] $targets
     *
     * @return self
     */
    public function setTargets(array $targets) : self
    {
        $this->targets = $targets;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getEventTypes() : array
    {
        return $this->eventTypes;
    }
    /**
     * 
     *
     * @param string[] $eventTypes
     *
     * @return self
     */
    public function setEventTypes(array $eventTypes) : self
    {
        $this->eventTypes = $eventTypes;
        return $this;
    }
    /**
     * The project ID of webhook policy.
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * The project ID of webhook policy.
     *
     * @param int $projectId
     *
     * @return self
     */
    public function setProjectId(int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The webhook policy ID.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The webhook policy ID.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The name of webhook policy.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of webhook policy.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}