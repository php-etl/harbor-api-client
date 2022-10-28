<?php

namespace Gyroscops\Harbor\Api\Model;

class RobotAccount
{
    /**
     * The update time of the robot account
     *
     * @var string|null
     */
    protected $updateTime;
    /**
     * The description of robot account
     *
     * @var string|null
     */
    protected $description;
    /**
     * The creation time of the robot account
     *
     * @var string|null
     */
    protected $creationTime;
    /**
     * The expiration of robot account (in seconds)
     *
     * @var int|null
     */
    protected $expiresAt;
    /**
     * The robot account is disable or enable
     *
     * @var bool|null
     */
    protected $disabled;
    /**
     * The project id of robot account
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The id of robot account
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name of robot account
     *
     * @var string|null
     */
    protected $name;
    /**
     * The update time of the robot account
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }
    /**
     * The update time of the robot account
     *
     * @param string|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
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
    /**
     * The creation time of the robot account
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * The creation time of the robot account
     *
     * @param string|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?string $creationTime): self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The expiration of robot account (in seconds)
     *
     * @return int|null
     */
    public function getExpiresAt(): ?int
    {
        return $this->expiresAt;
    }
    /**
     * The expiration of robot account (in seconds)
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
     * The robot account is disable or enable
     *
     * @return bool|null
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }
    /**
     * The robot account is disable or enable
     *
     * @param bool|null $disabled
     *
     * @return self
     */
    public function setDisabled(?bool $disabled): self
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * The project id of robot account
     *
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }
    /**
     * The project id of robot account
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
     * The id of robot account
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * The id of robot account
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
}
