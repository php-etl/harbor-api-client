<?php

namespace Gyroscops\Harbor\Api\Model;

class Label
{
    /**
     * The update time of label.
     *
     * @var string|null
     */
    protected $updateTime;
    /**
     * The description of label.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The color of label.
     *
     * @var string|null
     */
    protected $color;
    /**
     * The creation time of label.
     *
     * @var string|null
     */
    protected $creationTime;
    /**
     * The label is deleted or not.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The scope of label, g for global labels and p for project labels.
     *
     * @var string|null
     */
    protected $scope;
    /**
     * The project ID if the label is a project label.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The ID of label.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name of label.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The update time of label.
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }
    /**
     * The update time of label.
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
     * The description of label.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The description of label.
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
     * The color of label.
     *
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }
    /**
     * The color of label.
     *
     * @param string|null $color
     *
     * @return self
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }
    /**
     * The creation time of label.
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * The creation time of label.
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
     * The label is deleted or not.
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * The label is deleted or not.
     *
     * @param bool|null $deleted
     *
     * @return self
     */
    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * The scope of label, g for global labels and p for project labels.
     *
     * @return string|null
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }
    /**
     * The scope of label, g for global labels and p for project labels.
     *
     * @param string|null $scope
     *
     * @return self
     */
    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * The project ID if the label is a project label.
     *
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }
    /**
     * The project ID if the label is a project label.
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
     * The ID of label.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * The ID of label.
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
     * The name of label.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The name of label.
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
