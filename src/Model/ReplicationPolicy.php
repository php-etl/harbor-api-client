<?php

namespace Harbor\Api\Model;

class ReplicationPolicy
{
    /**
     * The update time of the policy.
     *
     * @var string
     */
    protected $updateTime;
    /**
     * The description of the policy.
     *
     * @var string
     */
    protected $description;
    /**
     * Whether the policy is enabled or not.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The replication policy filter array.
     *
     * @var ReplicationFilter[]
     */
    protected $filters;
    /**
     * 
     *
     * @var Registry
     */
    protected $destRegistry;
    /**
     * The create time of the policy.
     *
     * @var string
     */
    protected $creationTime;
    /**
     * 
     *
     * @var Registry
     */
    protected $srcRegistry;
    /**
     * The destination namespace.
     *
     * @var string
     */
    protected $destNamespace;
    /**
     * 
     *
     * @var ReplicationTrigger
     */
    protected $trigger;
    /**
     * Whether to replicate the deletion operation.
     *
     * @var bool
     */
    protected $deletion;
    /**
     * Whether to override the resources on the destination registry.
     *
     * @var bool
     */
    protected $override;
    /**
     * The policy ID.
     *
     * @var int
     */
    protected $id;
    /**
     * The policy name.
     *
     * @var string
     */
    protected $name;
    /**
     * The update time of the policy.
     *
     * @return string
     */
    public function getUpdateTime() : string
    {
        return $this->updateTime;
    }
    /**
     * The update time of the policy.
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
     * The description of the policy.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the policy.
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
     * Whether the policy is enabled or not.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Whether the policy is enabled or not.
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
     * The replication policy filter array.
     *
     * @return ReplicationFilter[]
     */
    public function getFilters() : array
    {
        return $this->filters;
    }
    /**
     * The replication policy filter array.
     *
     * @param ReplicationFilter[] $filters
     *
     * @return self
     */
    public function setFilters(array $filters) : self
    {
        $this->filters = $filters;
        return $this;
    }
    /**
     * 
     *
     * @return Registry
     */
    public function getDestRegistry() : Registry
    {
        return $this->destRegistry;
    }
    /**
     * 
     *
     * @param Registry $destRegistry
     *
     * @return self
     */
    public function setDestRegistry(Registry $destRegistry) : self
    {
        $this->destRegistry = $destRegistry;
        return $this;
    }
    /**
     * The create time of the policy.
     *
     * @return string
     */
    public function getCreationTime() : string
    {
        return $this->creationTime;
    }
    /**
     * The create time of the policy.
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
     * 
     *
     * @return Registry
     */
    public function getSrcRegistry() : Registry
    {
        return $this->srcRegistry;
    }
    /**
     * 
     *
     * @param Registry $srcRegistry
     *
     * @return self
     */
    public function setSrcRegistry(Registry $srcRegistry) : self
    {
        $this->srcRegistry = $srcRegistry;
        return $this;
    }
    /**
     * The destination namespace.
     *
     * @return string
     */
    public function getDestNamespace() : string
    {
        return $this->destNamespace;
    }
    /**
     * The destination namespace.
     *
     * @param string $destNamespace
     *
     * @return self
     */
    public function setDestNamespace(string $destNamespace) : self
    {
        $this->destNamespace = $destNamespace;
        return $this;
    }
    /**
     * 
     *
     * @return ReplicationTrigger
     */
    public function getTrigger() : ReplicationTrigger
    {
        return $this->trigger;
    }
    /**
     * 
     *
     * @param ReplicationTrigger $trigger
     *
     * @return self
     */
    public function setTrigger(ReplicationTrigger $trigger) : self
    {
        $this->trigger = $trigger;
        return $this;
    }
    /**
     * Whether to replicate the deletion operation.
     *
     * @return bool
     */
    public function getDeletion() : bool
    {
        return $this->deletion;
    }
    /**
     * Whether to replicate the deletion operation.
     *
     * @param bool $deletion
     *
     * @return self
     */
    public function setDeletion(bool $deletion) : self
    {
        $this->deletion = $deletion;
        return $this;
    }
    /**
     * Whether to override the resources on the destination registry.
     *
     * @return bool
     */
    public function getOverride() : bool
    {
        return $this->override;
    }
    /**
     * Whether to override the resources on the destination registry.
     *
     * @param bool $override
     *
     * @return self
     */
    public function setOverride(bool $override) : self
    {
        $this->override = $override;
        return $this;
    }
    /**
     * The policy ID.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The policy ID.
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
     * The policy name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The policy name.
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