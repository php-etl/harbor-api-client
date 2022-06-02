<?php

namespace Harbor\Api\Model;

class RobotAccount
{
    /**
     * The update time of the robot account
     *
     * @var string
     */
    protected $updateTime;
    /**
     * The description of robot account
     *
     * @var string
     */
    protected $description;
    /**
     * The creation time of the robot account
     *
     * @var string
     */
    protected $creationTime;
    /**
     * The expiration of robot account (in seconds)
     *
     * @var int
     */
    protected $expiresAt;
    /**
     * The robot account is disable or enable
     *
     * @var bool
     */
    protected $disabled;
    /**
     * The project id of robot account
     *
     * @var int
     */
    protected $projectId;
    /**
     * The id of robot account
     *
     * @var int
     */
    protected $id;
    /**
     * The name of robot account
     *
     * @var string
     */
    protected $name;
    /**
     * The update time of the robot account
     *
     * @return string
     */
    public function getUpdateTime() : string
    {
        return $this->updateTime;
    }
    /**
     * The update time of the robot account
     *
     * @param string $updateTime
     *
     * @return self
     */
    public function setUpdateTime(string $updateTime) : self
    {
        $this->updateTime = $updateTime;
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
    /**
     * The creation time of the robot account
     *
     * @return string
     */
    public function getCreationTime() : string
    {
        return $this->creationTime;
    }
    /**
     * The creation time of the robot account
     *
     * @param string $creationTime
     *
     * @return self
     */
    public function setCreationTime(string $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The expiration of robot account (in seconds)
     *
     * @return int
     */
    public function getExpiresAt() : int
    {
        return $this->expiresAt;
    }
    /**
     * The expiration of robot account (in seconds)
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
     * The robot account is disable or enable
     *
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * The robot account is disable or enable
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled) : self
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * The project id of robot account
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * The project id of robot account
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
     * The id of robot account
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The id of robot account
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
}