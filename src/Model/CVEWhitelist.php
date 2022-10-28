<?php

namespace Gyroscops\Harbor\Api\Model;

class CVEWhitelist
{
    /**
     *
     *
     * @var CVEWhitelistItem[]|null
     */
    protected $items;
    /**
     * ID of the project which the whitelist belongs to.  For system level whitelist this attribute is zero.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * ID of the whitelist
     *
     * @var int|null
     */
    protected $id;
    /**
     * the time for expiration of the whitelist, in the form of seconds since epoch.  This is an optional attribute, if it's not set the CVE whitelist does not expire.
     *
     * @var int|null
     */
    protected $expiresAt;
    /**
     *
     *
     * @return CVEWhitelistItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param CVEWhitelistItem[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * ID of the project which the whitelist belongs to.  For system level whitelist this attribute is zero.
     *
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }
    /**
     * ID of the project which the whitelist belongs to.  For system level whitelist this attribute is zero.
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
     * ID of the whitelist
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * ID of the whitelist
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
     * the time for expiration of the whitelist, in the form of seconds since epoch.  This is an optional attribute, if it's not set the CVE whitelist does not expire.
     *
     * @return int|null
     */
    public function getExpiresAt(): ?int
    {
        return $this->expiresAt;
    }
    /**
     * the time for expiration of the whitelist, in the form of seconds since epoch.  This is an optional attribute, if it's not set the CVE whitelist does not expire.
     *
     * @param int|null $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?int $expiresAt): self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
}
