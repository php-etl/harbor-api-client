<?php

namespace Gyroscops\Harbor\Api\Model;

class ReplicationPolicy
{
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
     * The description of the policy.
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var Registry|null
     */
    protected $srcRegistry;
    /**
     * 
     *
     * @var Registry|null
     */
    protected $destRegistry;
    /**
     * The destination namespace.
     *
     * @var string|null
     */
    protected $destNamespace;
    /**
    * Specify how many path components will be replaced by the provided destination namespace.
    The default value is -1 in which case the legacy mode will be applied.
    *
    * @var int|null
    */
    protected $destNamespaceReplaceCount;
    /**
     * 
     *
     * @var ReplicationTrigger|null
     */
    protected $trigger;
    /**
     * The replication policy filter array.
     *
     * @var ReplicationFilter[]|null
     */
    protected $filters;
    /**
     * Whether to replicate the deletion operation.
     *
     * @var bool|null
     */
    protected $replicateDeletion;
    /**
     * Deprecated, use "replicate_deletion" instead. Whether to replicate the deletion operation.
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
     * Whether the policy is enabled or not.
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * The create time of the policy.
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * The update time of the policy.
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * speed limit for each task
     *
     * @var int|null
     */
    protected $speed;
    /**
     * Whether to enable copy by chunk.
     *
     * @var bool|null
     */
    protected $copyByChunk;
    /**
     * The policy ID.
     *
     * @return int|null
     */
    public function getId() : ?int
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
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The policy name.
     *
     * @return string|null
     */
    public function getName() : ?string
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
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The description of the policy.
     *
     * @return string|null
     */
    public function getDescription() : ?string
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
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return Registry|null
     */
    public function getSrcRegistry() : ?Registry
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
    public function setSrcRegistry(?Registry $srcRegistry) : self
    {
        $this->srcRegistry = $srcRegistry;
        return $this;
    }
    /**
     * 
     *
     * @return Registry|null
     */
    public function getDestRegistry() : ?Registry
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
    public function setDestRegistry(?Registry $destRegistry) : self
    {
        $this->destRegistry = $destRegistry;
        return $this;
    }
    /**
     * The destination namespace.
     *
     * @return string|null
     */
    public function getDestNamespace() : ?string
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
    public function setDestNamespace(?string $destNamespace) : self
    {
        $this->destNamespace = $destNamespace;
        return $this;
    }
    /**
    * Specify how many path components will be replaced by the provided destination namespace.
    The default value is -1 in which case the legacy mode will be applied.
    *
    * @return int|null
    */
    public function getDestNamespaceReplaceCount() : ?int
    {
        return $this->destNamespaceReplaceCount;
    }
    /**
    * Specify how many path components will be replaced by the provided destination namespace.
    The default value is -1 in which case the legacy mode will be applied.
    *
    * @param int|null $destNamespaceReplaceCount
    *
    * @return self
    */
    public function setDestNamespaceReplaceCount(?int $destNamespaceReplaceCount) : self
    {
        $this->destNamespaceReplaceCount = $destNamespaceReplaceCount;
        return $this;
    }
    /**
     * 
     *
     * @return ReplicationTrigger|null
     */
    public function getTrigger() : ?ReplicationTrigger
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
    public function setTrigger(?ReplicationTrigger $trigger) : self
    {
        $this->trigger = $trigger;
        return $this;
    }
    /**
     * The replication policy filter array.
     *
     * @return ReplicationFilter[]|null
     */
    public function getFilters() : ?array
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
    public function setFilters(?array $filters) : self
    {
        $this->filters = $filters;
        return $this;
    }
    /**
     * Whether to replicate the deletion operation.
     *
     * @return bool|null
     */
    public function getReplicateDeletion() : ?bool
    {
        return $this->replicateDeletion;
    }
    /**
     * Whether to replicate the deletion operation.
     *
     * @param bool|null $replicateDeletion
     *
     * @return self
     */
    public function setReplicateDeletion(?bool $replicateDeletion) : self
    {
        $this->replicateDeletion = $replicateDeletion;
        return $this;
    }
    /**
     * Deprecated, use "replicate_deletion" instead. Whether to replicate the deletion operation.
     *
     * @return bool|null
     */
    public function getDeletion() : ?bool
    {
        return $this->deletion;
    }
    /**
     * Deprecated, use "replicate_deletion" instead. Whether to replicate the deletion operation.
     *
     * @param bool|null $deletion
     *
     * @return self
     */
    public function setDeletion(?bool $deletion) : self
    {
        $this->deletion = $deletion;
        return $this;
    }
    /**
     * Whether to override the resources on the destination registry.
     *
     * @return bool|null
     */
    public function getOverride() : ?bool
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
    public function setOverride(?bool $override) : self
    {
        $this->override = $override;
        return $this;
    }
    /**
     * Whether the policy is enabled or not.
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
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
    public function setEnabled(?bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * The create time of the policy.
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * The create time of the policy.
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
     * The update time of the policy.
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * The update time of the policy.
     *
     * @param \DateTime|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?\DateTime $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     * speed limit for each task
     *
     * @return int|null
     */
    public function getSpeed() : ?int
    {
        return $this->speed;
    }
    /**
     * speed limit for each task
     *
     * @param int|null $speed
     *
     * @return self
     */
    public function setSpeed(?int $speed) : self
    {
        $this->speed = $speed;
        return $this;
    }
    /**
     * Whether to enable copy by chunk.
     *
     * @return bool|null
     */
    public function getCopyByChunk() : ?bool
    {
        return $this->copyByChunk;
    }
    /**
     * Whether to enable copy by chunk.
     *
     * @param bool|null $copyByChunk
     *
     * @return self
     */
    public function setCopyByChunk(?bool $copyByChunk) : self
    {
        $this->copyByChunk = $copyByChunk;
        return $this;
    }
}