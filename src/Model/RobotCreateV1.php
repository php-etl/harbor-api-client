<?php

namespace Gyroscops\Harbor\Api\Model;

class RobotCreateV1
{
    /**
     * The name of robot account
     *
     * @var string|null
     */
    protected $name;
    /**
     * The description of robot account
     *
     * @var string|null
     */
    protected $description;
    /**
     * The expiration time on or after which the JWT MUST NOT be accepted for processing.
     *
     * @var int|null
     */
    protected $expiresAt;
    /**
     * The permission of robot account
     *
     * @var Access[]|null
     */
    protected $access;
    /**
     * The name of robot account
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of robot account
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
     * The description of robot account
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The description of robot account
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
     * The expiration time on or after which the JWT MUST NOT be accepted for processing.
     *
     * @return int|null
     */
    public function getExpiresAt() : ?int
    {
        return $this->expiresAt;
    }
    /**
     * The expiration time on or after which the JWT MUST NOT be accepted for processing.
     *
     * @param int|null $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?int $expiresAt) : self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * The permission of robot account
     *
     * @return Access[]|null
     */
    public function getAccess() : ?array
    {
        return $this->access;
    }
    /**
     * The permission of robot account
     *
     * @param Access[]|null $access
     *
     * @return self
     */
    public function setAccess(?array $access) : self
    {
        $this->access = $access;
        return $this;
    }
}