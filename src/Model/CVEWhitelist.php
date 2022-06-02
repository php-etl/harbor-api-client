<?php

namespace Harbor\Api\Model;

class CVEWhitelist
{
    /**
     * 
     *
     * @var CVEWhitelistItem[]
     */
    protected $items;
    /**
     * ID of the project which the whitelist belongs to.  For system level whitelist this attribute is zero.
     *
     * @var int
     */
    protected $projectId;
    /**
     * ID of the whitelist
     *
     * @var int
     */
    protected $id;
    /**
     * the time for expiration of the whitelist, in the form of seconds since epoch.  This is an optional attribute, if it's not set the CVE whitelist does not expire.
     *
     * @var int
     */
    protected $expiresAt;
    /**
     * 
     *
     * @return CVEWhitelistItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param CVEWhitelistItem[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * ID of the project which the whitelist belongs to.  For system level whitelist this attribute is zero.
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * ID of the project which the whitelist belongs to.  For system level whitelist this attribute is zero.
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
     * ID of the whitelist
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * ID of the whitelist
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
     * the time for expiration of the whitelist, in the form of seconds since epoch.  This is an optional attribute, if it's not set the CVE whitelist does not expire.
     *
     * @return int
     */
    public function getExpiresAt() : int
    {
        return $this->expiresAt;
    }
    /**
     * the time for expiration of the whitelist, in the form of seconds since epoch.  This is an optional attribute, if it's not set the CVE whitelist does not expire.
     *
     * @param int $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(int $expiresAt) : self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
}