<?php

namespace Harbor\Api\Model;

class Label
{
    /**
     * The update time of label.
     *
     * @var string
     */
    protected $updateTime;
    /**
     * The description of label.
     *
     * @var string
     */
    protected $description;
    /**
     * The color of label.
     *
     * @var string
     */
    protected $color;
    /**
     * The creation time of label.
     *
     * @var string
     */
    protected $creationTime;
    /**
     * The label is deleted or not.
     *
     * @var bool
     */
    protected $deleted;
    /**
     * The scope of label, g for global labels and p for project labels.
     *
     * @var string
     */
    protected $scope;
    /**
     * The project ID if the label is a project label.
     *
     * @var int
     */
    protected $projectId;
    /**
     * The ID of label.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of label.
     *
     * @var string
     */
    protected $name;
    /**
     * The update time of label.
     *
     * @return string
     */
    public function getUpdateTime() : string
    {
        return $this->updateTime;
    }
    /**
     * The update time of label.
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
     * The description of label.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of label.
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
     * The color of label.
     *
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }
    /**
     * The color of label.
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color) : self
    {
        $this->color = $color;
        return $this;
    }
    /**
     * The creation time of label.
     *
     * @return string
     */
    public function getCreationTime() : string
    {
        return $this->creationTime;
    }
    /**
     * The creation time of label.
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
     * The label is deleted or not.
     *
     * @return bool
     */
    public function getDeleted() : bool
    {
        return $this->deleted;
    }
    /**
     * The label is deleted or not.
     *
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted) : self
    {
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * The scope of label, g for global labels and p for project labels.
     *
     * @return string
     */
    public function getScope() : string
    {
        return $this->scope;
    }
    /**
     * The scope of label, g for global labels and p for project labels.
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(string $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * The project ID if the label is a project label.
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * The project ID if the label is a project label.
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
     * The ID of label.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The ID of label.
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
     * The name of label.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of label.
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