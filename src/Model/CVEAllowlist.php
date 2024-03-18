<?php

namespace Gyroscops\Harbor\Api\Model;

class CVEAllowlist
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * ID of the allowlist
     *
     * @var int|null
     */
    protected $id;
    /**
     * ID of the project which the allowlist belongs to.  For system level allowlist this attribute is zero.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * the time for expiration of the allowlist, in the form of seconds since epoch.  This is an optional attribute, if it's not set the CVE allowlist does not expire.
     *
     * @var int|null
     */
    protected $expiresAt;
    /**
     * 
     *
     * @var list<CVEAllowlistItem>|null
     */
    protected $items;
    /**
     * The creation time of the allowlist.
     *
     * @var \DateTimeInterface|null
     */
    protected $creationTime;
    /**
     * The update time of the allowlist.
     *
     * @var \DateTimeInterface|null
     */
    protected $updateTime;
    /**
     * ID of the allowlist
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * ID of the allowlist
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * ID of the project which the allowlist belongs to.  For system level allowlist this attribute is zero.
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * ID of the project which the allowlist belongs to.  For system level allowlist this attribute is zero.
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * the time for expiration of the allowlist, in the form of seconds since epoch.  This is an optional attribute, if it's not set the CVE allowlist does not expire.
     *
     * @return int|null
     */
    public function getExpiresAt() : ?int
    {
        return $this->expiresAt;
    }
    /**
     * the time for expiration of the allowlist, in the form of seconds since epoch.  This is an optional attribute, if it's not set the CVE allowlist does not expire.
     *
     * @param int|null $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?int $expiresAt) : self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * 
     *
     * @return list<CVEAllowlistItem>|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param list<CVEAllowlistItem>|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * The creation time of the allowlist.
     *
     * @return \DateTimeInterface|null
     */
    public function getCreationTime() : ?\DateTimeInterface
    {
        return $this->creationTime;
    }
    /**
     * The creation time of the allowlist.
     *
     * @param \DateTimeInterface|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?\DateTimeInterface $creationTime) : self
    {
        $this->initialized['creationTime'] = true;
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The update time of the allowlist.
     *
     * @return \DateTimeInterface|null
     */
    public function getUpdateTime() : ?\DateTimeInterface
    {
        return $this->updateTime;
    }
    /**
     * The update time of the allowlist.
     *
     * @param \DateTimeInterface|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?\DateTimeInterface $updateTime) : self
    {
        $this->initialized['updateTime'] = true;
        $this->updateTime = $updateTime;
        return $this;
    }
}