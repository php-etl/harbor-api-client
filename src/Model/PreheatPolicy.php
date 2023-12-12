<?php

namespace Gyroscops\Harbor\Api\Model;

class PreheatPolicy
{
    /**
     * The ID of preheat policy
     *
     * @var int|null
     */
    protected $id;
    /**
     * The Name of preheat policy
     *
     * @var string|null
     */
    protected $name;
    /**
     * The Description of preheat policy
     *
     * @var string|null
     */
    protected $description;
    /**
     * The ID of preheat policy project
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The ID of preheat policy provider
     *
     * @var int|null
     */
    protected $providerId;
    /**
     * The Name of preheat policy provider
     *
     * @var string|null
     */
    protected $providerName;
    /**
     * The Filters of preheat policy
     *
     * @var string|null
     */
    protected $filters;
    /**
     * The Trigger of preheat policy
     *
     * @var string|null
     */
    protected $trigger;
    /**
     * Whether the preheat policy enabled
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * The Create Time of preheat policy
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * The Update Time of preheat policy
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * The ID of preheat policy
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of preheat policy
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
     * The Name of preheat policy
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The Name of preheat policy
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
     * The Description of preheat policy
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The Description of preheat policy
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
     * The ID of preheat policy project
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of preheat policy project
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The ID of preheat policy provider
     *
     * @return int|null
     */
    public function getProviderId() : ?int
    {
        return $this->providerId;
    }
    /**
     * The ID of preheat policy provider
     *
     * @param int|null $providerId
     *
     * @return self
     */
    public function setProviderId(?int $providerId) : self
    {
        $this->providerId = $providerId;
        return $this;
    }
    /**
     * The Name of preheat policy provider
     *
     * @return string|null
     */
    public function getProviderName() : ?string
    {
        return $this->providerName;
    }
    /**
     * The Name of preheat policy provider
     *
     * @param string|null $providerName
     *
     * @return self
     */
    public function setProviderName(?string $providerName) : self
    {
        $this->providerName = $providerName;
        return $this;
    }
    /**
     * The Filters of preheat policy
     *
     * @return string|null
     */
    public function getFilters() : ?string
    {
        return $this->filters;
    }
    /**
     * The Filters of preheat policy
     *
     * @param string|null $filters
     *
     * @return self
     */
    public function setFilters(?string $filters) : self
    {
        $this->filters = $filters;
        return $this;
    }
    /**
     * The Trigger of preheat policy
     *
     * @return string|null
     */
    public function getTrigger() : ?string
    {
        return $this->trigger;
    }
    /**
     * The Trigger of preheat policy
     *
     * @param string|null $trigger
     *
     * @return self
     */
    public function setTrigger(?string $trigger) : self
    {
        $this->trigger = $trigger;
        return $this;
    }
    /**
     * Whether the preheat policy enabled
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * Whether the preheat policy enabled
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
     * The Create Time of preheat policy
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * The Create Time of preheat policy
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
     * The Update Time of preheat policy
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * The Update Time of preheat policy
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
}