<?php

namespace Gyroscops\Harbor\Api\Model;

class Label
{
    /**
     * The ID of the label
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name the label
     *
     * @var string|null
     */
    protected $name;
    /**
     * The description the label
     *
     * @var string|null
     */
    protected $description;
    /**
     * The color the label
     *
     * @var string|null
     */
    protected $color;
    /**
     * The scope the label
     *
     * @var string|null
     */
    protected $scope;
    /**
     * The ID of project that the label belongs to
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The creation time the label
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * The update time of the label
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * The ID of the label
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of the label
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
     * The name the label
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name the label
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
     * The description the label
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The description the label
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
     * The color the label
     *
     * @return string|null
     */
    public function getColor() : ?string
    {
        return $this->color;
    }
    /**
     * The color the label
     *
     * @param string|null $color
     *
     * @return self
     */
    public function setColor(?string $color) : self
    {
        $this->color = $color;
        return $this;
    }
    /**
     * The scope the label
     *
     * @return string|null
     */
    public function getScope() : ?string
    {
        return $this->scope;
    }
    /**
     * The scope the label
     *
     * @param string|null $scope
     *
     * @return self
     */
    public function setScope(?string $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * The ID of project that the label belongs to
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of project that the label belongs to
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The creation time the label
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * The creation time the label
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
     * The update time of the label
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * The update time of the label
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