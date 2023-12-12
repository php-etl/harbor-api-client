<?php

namespace Gyroscops\Harbor\Api\Model;

class Robot
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
     * The description of the robot
     *
     * @var string|null
     */
    protected $description;
    /**
     * The secret of the robot
     *
     * @var string|null
     */
    protected $secret;
    /**
     * The level of the robot, project or system
     *
     * @var string|null
     */
    protected $level;
    /**
     * The duration of the robot in days
     *
     * @var int|null
     */
    protected $duration;
    /**
     * The editable status of the robot
     *
     * @var bool|null
     */
    protected $editable;
    /**
     * The disable status of the robot
     *
     * @var bool|null
     */
    protected $disable;
    /**
     * The expiration date of the robot
     *
     * @var int|null
     */
    protected $expiresAt;
    /**
     * 
     *
     * @var RobotPermission[]|null
     */
    protected $permissions;
    /**
     * The creation time of the robot.
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * The update time of the robot.
     *
     * @var \DateTime|null
     */
    protected $updateTime;
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
     * The description of the robot
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The description of the robot
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
     * The level of the robot, project or system
     *
     * @return string|null
     */
    public function getLevel() : ?string
    {
        return $this->level;
    }
    /**
     * The level of the robot, project or system
     *
     * @param string|null $level
     *
     * @return self
     */
    public function setLevel(?string $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * The duration of the robot in days
     *
     * @return int|null
     */
    public function getDuration() : ?int
    {
        return $this->duration;
    }
    /**
     * The duration of the robot in days
     *
     * @param int|null $duration
     *
     * @return self
     */
    public function setDuration(?int $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     * The editable status of the robot
     *
     * @return bool|null
     */
    public function getEditable() : ?bool
    {
        return $this->editable;
    }
    /**
     * The editable status of the robot
     *
     * @param bool|null $editable
     *
     * @return self
     */
    public function setEditable(?bool $editable) : self
    {
        $this->editable = $editable;
        return $this;
    }
    /**
     * The disable status of the robot
     *
     * @return bool|null
     */
    public function getDisable() : ?bool
    {
        return $this->disable;
    }
    /**
     * The disable status of the robot
     *
     * @param bool|null $disable
     *
     * @return self
     */
    public function setDisable(?bool $disable) : self
    {
        $this->disable = $disable;
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
    /**
     * 
     *
     * @return RobotPermission[]|null
     */
    public function getPermissions() : ?array
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param RobotPermission[]|null $permissions
     *
     * @return self
     */
    public function setPermissions(?array $permissions) : self
    {
        $this->permissions = $permissions;
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
     * The update time of the robot.
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * The update time of the robot.
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