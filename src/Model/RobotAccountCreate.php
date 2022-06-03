<?php

namespace Gyroscops\Harbor\Api\Model;

class RobotAccountCreate
{
    /**
     * The permission of robot account
     *
     * @var RobotAccountAccess[]
     */
    protected $access;
    /**
     * The name of robot account
     *
     * @var string
     */
    protected $name;
    /**
     * The expiration time on or after which the JWT MUST NOT be accepted for processing.
     *
     * @var int
     */
    protected $expiresAt;
    /**
     * The description of robot account
     *
     * @var string
     */
    protected $description;
    /**
     * The permission of robot account
     *
     * @return RobotAccountAccess[]
     */
    public function getAccess() : array
    {
        return $this->access;
    }
    /**
     * The permission of robot account
     *
     * @param RobotAccountAccess[] $access
     *
     * @return self
     */
    public function setAccess(array $access) : self
    {
        $this->access = $access;
        return $this;
    }
    /**
     * The name of robot account
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of robot account
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
    /**
     * The expiration time on or after which the JWT MUST NOT be accepted for processing.
     *
     * @return int
     */
    public function getExpiresAt() : int
    {
        return $this->expiresAt;
    }
    /**
     * The expiration time on or after which the JWT MUST NOT be accepted for processing.
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
    /**
     * The description of robot account
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of robot account
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
}