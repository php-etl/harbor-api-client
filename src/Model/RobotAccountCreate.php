<?php

namespace Gyroscops\Harbor\Api\Model;

class RobotAccountCreate
{
    /**
     * The permission of robot account
     *
     * @var RobotAccountAccess[]|null
     */
    protected $access;
    /**
     * The name of robot account
     *
     * @var string|null
     */
    protected $name;
    /**
     * The expiration time on or after which the JWT MUST NOT be accepted for processing.
     *
     * @var int|null
     */
    protected $expiresAt;
    /**
     * The description of robot account
     *
     * @var string|null
     */
    protected $description;
    /**
     * The permission of robot account
     *
     * @return RobotAccountAccess[]|null
     */
    public function getAccess(): ?array
    {
        return $this->access;
    }
    /**
     * The permission of robot account
     *
     * @param RobotAccountAccess[]|null $access
     *
     * @return self
     */
    public function setAccess(?array $access): self
    {
        $this->access = $access;
        return $this;
    }
    /**
     * The name of robot account
     *
     * @return string|null
     */
    public function getName(): ?string
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
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The expiration time on or after which the JWT MUST NOT be accepted for processing.
     *
     * @return int|null
     */
    public function getExpiresAt(): ?int
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
    public function setExpiresAt(?int $expiresAt): self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * The description of robot account
     *
     * @return string|null
     */
    public function getDescription(): ?string
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
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
}
