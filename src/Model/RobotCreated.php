<?php

namespace Gyroscops\Harbor\Api\Model;

class RobotCreated
{
    /**
     * The ID of the robot
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name of the robot
     *
     * @var string|null
     */
    protected $name;
    /**
     * The secret of the robot
     *
     * @var string|null
     */
    protected $secret;
    /**
     * The creation time of the robot.
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * The expiration date of the robot
     *
     * @var int|null
     */
    protected $expiresAt;
    /**
     * The ID of the robot
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of the robot
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
     * The name of the robot
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the robot
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
     * The secret of the robot
     *
     * @return string|null
     */
    public function getSecret() : ?string
    {
        return $this->secret;
    }
    /**
     * The secret of the robot
     *
     * @param string|null $secret
     *
     * @return self
     */
    public function setSecret(?string $secret) : self
    {
        $this->secret = $secret;
        return $this;
    }
    /**
     * The creation time of the robot.
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * The creation time of the robot.
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
     * The expiration date of the robot
     *
     * @return int|null
     */
    public function getExpiresAt() : ?int
    {
        return $this->expiresAt;
    }
    /**
     * The expiration date of the robot
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
}