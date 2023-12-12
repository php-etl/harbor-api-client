<?php

namespace Gyroscops\Harbor\Api\Model;

class AuditLog
{
    /**
     * The ID of the audit log entry.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Username of the user in this log entry.
     *
     * @var string|null
     */
    protected $username;
    /**
     * Name of the repository in this log entry.
     *
     * @var string|null
     */
    protected $resource;
    /**
     * Tag of the repository in this log entry.
     *
     * @var string|null
     */
    protected $resourceType;
    /**
     * The operation against the repository in this log entry.
     *
     * @var string|null
     */
    protected $operation;
    /**
     * The time when this operation is triggered.
     *
     * @var \DateTime|null
     */
    protected $opTime;
    /**
     * The ID of the audit log entry.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of the audit log entry.
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
     * Username of the user in this log entry.
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * Username of the user in this log entry.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->username = $username;
        return $this;
    }
    /**
     * Name of the repository in this log entry.
     *
     * @return string|null
     */
    public function getResource() : ?string
    {
        return $this->resource;
    }
    /**
     * Name of the repository in this log entry.
     *
     * @param string|null $resource
     *
     * @return self
     */
    public function setResource(?string $resource) : self
    {
        $this->resource = $resource;
        return $this;
    }
    /**
     * Tag of the repository in this log entry.
     *
     * @return string|null
     */
    public function getResourceType() : ?string
    {
        return $this->resourceType;
    }
    /**
     * Tag of the repository in this log entry.
     *
     * @param string|null $resourceType
     *
     * @return self
     */
    public function setResourceType(?string $resourceType) : self
    {
        $this->resourceType = $resourceType;
        return $this;
    }
    /**
     * The operation against the repository in this log entry.
     *
     * @return string|null
     */
    public function getOperation() : ?string
    {
        return $this->operation;
    }
    /**
     * The operation against the repository in this log entry.
     *
     * @param string|null $operation
     *
     * @return self
     */
    public function setOperation(?string $operation) : self
    {
        $this->operation = $operation;
        return $this;
    }
    /**
     * The time when this operation is triggered.
     *
     * @return \DateTime|null
     */
    public function getOpTime() : ?\DateTime
    {
        return $this->opTime;
    }
    /**
     * The time when this operation is triggered.
     *
     * @param \DateTime|null $opTime
     *
     * @return self
     */
    public function setOpTime(?\DateTime $opTime) : self
    {
        $this->opTime = $opTime;
        return $this;
    }
}