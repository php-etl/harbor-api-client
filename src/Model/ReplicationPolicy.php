<?php

namespace Gyroscops\Harbor\Api\Model;

class ReplicationPolicy
{
    /**
     * The update time of the policy.
     *
     * @var string|null
     */
    protected $updateTime;
    /**
     * The description of the policy.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Whether the policy is enabled or not.
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * The replication policy filter array.
     *
     * @var ReplicationFilter[]|null
     */
    protected $filters;
    /**
     *
     *
     * @var Registry|null
     */
    protected $destRegistry;
    /**
     * The create time of the policy.
     *
     * @var string|null
     */
    protected $creationTime;
    /**
     *
     *
     * @var Registry|null
     */
    protected $srcRegistry;
    /**
     * The destination namespace.
     *
     * @var string|null
     */
    protected $destNamespace;
    /**
     *
     *
     * @var ReplicationTrigger|null
     */
    protected $trigger;
    /**
     * Whether to replicate the deletion operation.
     *
     * @var bool|null
     */
    protected $deletion;
    /**
     * Whether to override the resources on the destination registry.
     *
     * @var bool|null
     */
    protected $override;
    /**
     * The policy ID.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The policy name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The update time of the policy.
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }
    /**
     * The update time of the policy.
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
     * The description of the policy.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The description of the policy.
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
     * Whether the policy is enabled or not.
     *
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
    /**
     * Whether the policy is enabled or not.
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
     * The replication policy filter array.
     *
     * @return ReplicationFilter[]|null
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }
    /**
     * The replication policy filter array.
     *
     * @param ReplicationFilter[]|null $filters
     *
     * @return self
     */
    public function setFilters(?array $filters): self
    {
        $this->filters = $filters;
        return $this;
    }
    /**
     *
     *
     * @return Registry|null
     */
    public function getDestRegistry(): ?Registry
    {
        return $this->destRegistry;
    }
    /**
     *
     *
     * @param Registry|null $destRegistry
     *
     * @return self
     */
    public function setDestRegistry(?Registry $destRegistry): self
    {
        $this->destRegistry = $destRegistry;
        return $this;
    }
    /**
     * The create time of the policy.
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * The create time of the policy.
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
     *
     *
     * @return Registry|null
     */
    public function getSrcRegistry(): ?Registry
    {
        return $this->srcRegistry;
    }
    /**
     *
     *
     * @param Registry|null $srcRegistry
     *
     * @return self
     */
    public function setSrcRegistry(?Registry $srcRegistry): self
    {
        $this->srcRegistry = $srcRegistry;
        return $this;
    }
    /**
     * The destination namespace.
     *
     * @return string|null
     */
    public function getDestNamespace(): ?string
    {
        return $this->destNamespace;
    }
    /**
     * The destination namespace.
     *
     * @param string|null $destNamespace
     *
     * @return self
     */
    public function setDestNamespace(?string $destNamespace): self
    {
        $this->destNamespace = $destNamespace;
        return $this;
    }
    /**
     *
     *
     * @return ReplicationTrigger|null
     */
    public function getTrigger(): ?ReplicationTrigger
    {
        return $this->trigger;
    }
    /**
     *
     *
     * @param ReplicationTrigger|null $trigger
     *
     * @return self
     */
    public function setTrigger(?ReplicationTrigger $trigger): self
    {
        $this->trigger = $trigger;
        return $this;
    }
    /**
     * Whether to replicate the deletion operation.
     *
     * @return bool|null
     */
    public function getDeletion(): ?bool
    {
        return $this->deletion;
    }
    /**
     * Whether to replicate the deletion operation.
     *
     * @param bool|null $deletion
     *
     * @return self
     */
    public function setDeletion(?bool $deletion): self
    {
        $this->deletion = $deletion;
        return $this;
    }
    /**
     * Whether to override the resources on the destination registry.
     *
     * @return bool|null
     */
    public function getOverride(): ?bool
    {
        return $this->override;
    }
    /**
     * Whether to override the resources on the destination registry.
     *
     * @param bool|null $override
     *
     * @return self
     */
    public function setOverride(?bool $override): self
    {
        $this->override = $override;
        return $this;
    }
    /**
     * The policy ID.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * The policy ID.
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
     * The policy name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The policy name.
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
