<?php

namespace Gyroscops\Harbor\Api\Model;

class Repository
{
    /**
     * The ID of the repository
     *
     * @var int|null
     */
    protected $id;
    /**
     * The ID of the project that the repository belongs to
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The name of the repository
     *
     * @var string|null
     */
    protected $name;
    /**
     * The description of the repository
     *
     * @var string|null
     */
    protected $description;
    /**
     * The count of the artifacts inside the repository
     *
     * @var int|null
     */
    protected $artifactCount;
    /**
     * The count that the artifact inside the repository pulled
     *
     * @var int|null
     */
    protected $pullCount;
    /**
     * The creation time of the repository
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * The update time of the repository
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * The ID of the repository
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of the repository
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
     * The ID of the project that the repository belongs to
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project that the repository belongs to
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
     * The name of the repository
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the repository
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
     * The description of the repository
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The description of the repository
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
     * The count of the artifacts inside the repository
     *
     * @return int|null
     */
    public function getArtifactCount() : ?int
    {
        return $this->artifactCount;
    }
    /**
     * The count of the artifacts inside the repository
     *
     * @param int|null $artifactCount
     *
     * @return self
     */
    public function setArtifactCount(?int $artifactCount) : self
    {
        $this->artifactCount = $artifactCount;
        return $this;
    }
    /**
     * The count that the artifact inside the repository pulled
     *
     * @return int|null
     */
    public function getPullCount() : ?int
    {
        return $this->pullCount;
    }
    /**
     * The count that the artifact inside the repository pulled
     *
     * @param int|null $pullCount
     *
     * @return self
     */
    public function setPullCount(?int $pullCount) : self
    {
        $this->pullCount = $pullCount;
        return $this;
    }
    /**
     * The creation time of the repository
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * The creation time of the repository
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
     * The update time of the repository
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * The update time of the repository
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