<?php

namespace Gyroscops\Harbor\Api\Model;

class WebhookPolicy
{
    /**
     * The update time of the webhook policy.
     *
     * @var string|null
     */
    protected $updateTime;
    /**
     * The description of webhook policy.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The creator of the webhook policy.
     *
     * @var string|null
     */
    protected $creator;
    /**
     * The create time of the webhook policy.
     *
     * @var string|null
     */
    protected $creationTime;
    /**
     * Whether the webhook policy is enabled or not.
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     *
     *
     * @var WebhookTargetObject[]|null
     */
    protected $targets;
    /**
     *
     *
     * @var string[]|null
     */
    protected $eventTypes;
    /**
     * The project ID of webhook policy.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The webhook policy ID.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name of webhook policy.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The update time of the webhook policy.
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }
    /**
     * The update time of the webhook policy.
     *
     * @param string|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     * The description of webhook policy.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The description of webhook policy.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * The creator of the webhook policy.
     *
     * @return string|null
     */
    public function getCreator(): ?string
    {
        return $this->creator;
    }
    /**
     * The creator of the webhook policy.
     *
     * @param string|null $creator
     *
     * @return self
     */
    public function setCreator(?string $creator): self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * The create time of the webhook policy.
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * The create time of the webhook policy.
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
     * Whether the webhook policy is enabled or not.
     *
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
    /**
     * Whether the webhook policy is enabled or not.
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
     *
     *
     * @return WebhookTargetObject[]|null
     */
    public function getTargets(): ?array
    {
        return $this->targets;
    }
    /**
     *
     *
     * @param WebhookTargetObject[]|null $targets
     *
     * @return self
     */
    public function setTargets(?array $targets): self
    {
        $this->targets = $targets;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getEventTypes(): ?array
    {
        return $this->eventTypes;
    }
    /**
     *
     *
     * @param string[]|null $eventTypes
     *
     * @return self
     */
    public function setEventTypes(?array $eventTypes): self
    {
        $this->eventTypes = $eventTypes;
        return $this;
    }
    /**
     * The project ID of webhook policy.
     *
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }
    /**
     * The project ID of webhook policy.
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The webhook policy ID.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * The webhook policy ID.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The name of webhook policy.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The name of webhook policy.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
