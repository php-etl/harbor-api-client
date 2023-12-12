<?php

namespace Gyroscops\Harbor\Api\Model;

class Tag
{
    /**
     * The ID of the tag
     *
     * @var int|null
     */
    protected $id;
    /**
     * The ID of the repository that the tag belongs to
     *
     * @var int|null
     */
    protected $repositoryId;
    /**
     * The ID of the artifact that the tag attached to
     *
     * @var int|null
     */
    protected $artifactId;
    /**
     * The name of the tag
     *
     * @var string|null
     */
    protected $name;
    /**
     * The push time of the tag
     *
     * @var \DateTime|null
     */
    protected $pushTime;
    /**
     * The latest pull time of the tag
     *
     * @var \DateTime|null
     */
    protected $pullTime;
    /**
     * The immutable status of the tag
     *
     * @var bool|null
     */
    protected $immutable;
    /**
     * The ID of the tag
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of the tag
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
     * The ID of the repository that the tag belongs to
     *
     * @return int|null
     */
    public function getRepositoryId() : ?int
    {
        return $this->repositoryId;
    }
    /**
     * The ID of the repository that the tag belongs to
     *
     * @param int|null $repositoryId
     *
     * @return self
     */
    public function setRepositoryId(?int $repositoryId) : self
    {
        $this->repositoryId = $repositoryId;
        return $this;
    }
    /**
     * The ID of the artifact that the tag attached to
     *
     * @return int|null
     */
    public function getArtifactId() : ?int
    {
        return $this->artifactId;
    }
    /**
     * The ID of the artifact that the tag attached to
     *
     * @param int|null $artifactId
     *
     * @return self
     */
    public function setArtifactId(?int $artifactId) : self
    {
        $this->artifactId = $artifactId;
        return $this;
    }
    /**
     * The name of the tag
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the tag
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
     * The push time of the tag
     *
     * @return \DateTime|null
     */
    public function getPushTime() : ?\DateTime
    {
        return $this->pushTime;
    }
    /**
     * The push time of the tag
     *
     * @param \DateTime|null $pushTime
     *
     * @return self
     */
    public function setPushTime(?\DateTime $pushTime) : self
    {
        $this->pushTime = $pushTime;
        return $this;
    }
    /**
     * The latest pull time of the tag
     *
     * @return \DateTime|null
     */
    public function getPullTime() : ?\DateTime
    {
        return $this->pullTime;
    }
    /**
     * The latest pull time of the tag
     *
     * @param \DateTime|null $pullTime
     *
     * @return self
     */
    public function setPullTime(?\DateTime $pullTime) : self
    {
        $this->pullTime = $pullTime;
        return $this;
    }
    /**
     * The immutable status of the tag
     *
     * @return bool|null
     */
    public function getImmutable() : ?bool
    {
        return $this->immutable;
    }
    /**
     * The immutable status of the tag
     *
     * @param bool|null $immutable
     *
     * @return self
     */
    public function setImmutable(?bool $immutable) : self
    {
        $this->immutable = $immutable;
        return $this;
    }
}