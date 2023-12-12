<?php

namespace Gyroscops\Harbor\Api\Model;

class Accessory
{
    /**
     * The ID of the accessory
     *
     * @var int|null
     */
    protected $id;
    /**
     * The artifact id of the accessory
     *
     * @var int|null
     */
    protected $artifactId;
    /**
     * Going to be deprecated, use repo and digest for insteand. The subject artifact id of the accessory.
     *
     * @var int|null
     */
    protected $subjectArtifactId;
    /**
     * The subject artifact digest of the accessory
     *
     * @var string|null
     */
    protected $subjectArtifactDigest;
    /**
     * The subject artifact repository name of the accessory
     *
     * @var string|null
     */
    protected $subjectArtifactRepo;
    /**
     * The artifact size of the accessory
     *
     * @var int|null
     */
    protected $size;
    /**
     * The artifact digest of the accessory
     *
     * @var string|null
     */
    protected $digest;
    /**
     * The artifact size of the accessory
     *
     * @var string|null
     */
    protected $type;
    /**
     * The icon of the accessory
     *
     * @var string|null
     */
    protected $icon;
    /**
     * The creation time of the accessory
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * The ID of the accessory
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of the accessory
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
     * The artifact id of the accessory
     *
     * @return int|null
     */
    public function getArtifactId() : ?int
    {
        return $this->artifactId;
    }
    /**
     * The artifact id of the accessory
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
     * Going to be deprecated, use repo and digest for insteand. The subject artifact id of the accessory.
     *
     * @return int|null
     */
    public function getSubjectArtifactId() : ?int
    {
        return $this->subjectArtifactId;
    }
    /**
     * Going to be deprecated, use repo and digest for insteand. The subject artifact id of the accessory.
     *
     * @param int|null $subjectArtifactId
     *
     * @return self
     */
    public function setSubjectArtifactId(?int $subjectArtifactId) : self
    {
        $this->subjectArtifactId = $subjectArtifactId;
        return $this;
    }
    /**
     * The subject artifact digest of the accessory
     *
     * @return string|null
     */
    public function getSubjectArtifactDigest() : ?string
    {
        return $this->subjectArtifactDigest;
    }
    /**
     * The subject artifact digest of the accessory
     *
     * @param string|null $subjectArtifactDigest
     *
     * @return self
     */
    public function setSubjectArtifactDigest(?string $subjectArtifactDigest) : self
    {
        $this->subjectArtifactDigest = $subjectArtifactDigest;
        return $this;
    }
    /**
     * The subject artifact repository name of the accessory
     *
     * @return string|null
     */
    public function getSubjectArtifactRepo() : ?string
    {
        return $this->subjectArtifactRepo;
    }
    /**
     * The subject artifact repository name of the accessory
     *
     * @param string|null $subjectArtifactRepo
     *
     * @return self
     */
    public function setSubjectArtifactRepo(?string $subjectArtifactRepo) : self
    {
        $this->subjectArtifactRepo = $subjectArtifactRepo;
        return $this;
    }
    /**
     * The artifact size of the accessory
     *
     * @return int|null
     */
    public function getSize() : ?int
    {
        return $this->size;
    }
    /**
     * The artifact size of the accessory
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * The artifact digest of the accessory
     *
     * @return string|null
     */
    public function getDigest() : ?string
    {
        return $this->digest;
    }
    /**
     * The artifact digest of the accessory
     *
     * @param string|null $digest
     *
     * @return self
     */
    public function setDigest(?string $digest) : self
    {
        $this->digest = $digest;
        return $this;
    }
    /**
     * The artifact size of the accessory
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The artifact size of the accessory
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The icon of the accessory
     *
     * @return string|null
     */
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    /**
     * The icon of the accessory
     *
     * @param string|null $icon
     *
     * @return self
     */
    public function setIcon(?string $icon) : self
    {
        $this->icon = $icon;
        return $this;
    }
    /**
     * The creation time of the accessory
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * The creation time of the accessory
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
}