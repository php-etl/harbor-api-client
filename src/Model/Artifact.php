<?php

namespace Gyroscops\Harbor\Api\Model;

class Artifact
{
    /**
     * The ID of the artifact
     *
     * @var int|null
     */
    protected $id;
    /**
     * The type of the artifact, e.g. image, chart, etc
     *
     * @var string|null
     */
    protected $type;
    /**
     * The media type of the artifact
     *
     * @var string|null
     */
    protected $mediaType;
    /**
     * The manifest media type of the artifact
     *
     * @var string|null
     */
    protected $manifestMediaType;
    /**
     * The ID of the project that the artifact belongs to
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The ID of the repository that the artifact belongs to
     *
     * @var int|null
     */
    protected $repositoryId;
    /**
     * The digest of the artifact
     *
     * @var string|null
     */
    protected $digest;
    /**
     * The size of the artifact
     *
     * @var int|null
     */
    protected $size;
    /**
     * The digest of the icon
     *
     * @var string|null
     */
    protected $icon;
    /**
     * The push time of the artifact
     *
     * @var \DateTime|null
     */
    protected $pushTime;
    /**
     * The latest pull time of the artifact
     *
     * @var \DateTime|null
     */
    protected $pullTime;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $extraAttrs;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $annotations;
    /**
     * 
     *
     * @var Reference[]|null
     */
    protected $references;
    /**
     * 
     *
     * @var Tag[]|null
     */
    protected $tags;
    /**
     * 
     *
     * @var AdditionLink[]|null
     */
    protected $additionLinks;
    /**
     * 
     *
     * @var Label[]|null
     */
    protected $labels;
    /**
     * The scan overview attached in the metadata of tag
     *
     * @var NativeReportSummary[]|null
     */
    protected $scanOverview;
    /**
     * 
     *
     * @var Accessory[]|null
     */
    protected $accessories;
    /**
     * The ID of the artifact
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of the artifact
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
     * The type of the artifact, e.g. image, chart, etc
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The type of the artifact, e.g. image, chart, etc
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
     * The media type of the artifact
     *
     * @return string|null
     */
    public function getMediaType() : ?string
    {
        return $this->mediaType;
    }
    /**
     * The media type of the artifact
     *
     * @param string|null $mediaType
     *
     * @return self
     */
    public function setMediaType(?string $mediaType) : self
    {
        $this->mediaType = $mediaType;
        return $this;
    }
    /**
     * The manifest media type of the artifact
     *
     * @return string|null
     */
    public function getManifestMediaType() : ?string
    {
        return $this->manifestMediaType;
    }
    /**
     * The manifest media type of the artifact
     *
     * @param string|null $manifestMediaType
     *
     * @return self
     */
    public function setManifestMediaType(?string $manifestMediaType) : self
    {
        $this->manifestMediaType = $manifestMediaType;
        return $this;
    }
    /**
     * The ID of the project that the artifact belongs to
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project that the artifact belongs to
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
     * The ID of the repository that the artifact belongs to
     *
     * @return int|null
     */
    public function getRepositoryId() : ?int
    {
        return $this->repositoryId;
    }
    /**
     * The ID of the repository that the artifact belongs to
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
     * The digest of the artifact
     *
     * @return string|null
     */
    public function getDigest() : ?string
    {
        return $this->digest;
    }
    /**
     * The digest of the artifact
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
     * The size of the artifact
     *
     * @return int|null
     */
    public function getSize() : ?int
    {
        return $this->size;
    }
    /**
     * The size of the artifact
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
     * The digest of the icon
     *
     * @return string|null
     */
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    /**
     * The digest of the icon
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
     * The push time of the artifact
     *
     * @return \DateTime|null
     */
    public function getPushTime() : ?\DateTime
    {
        return $this->pushTime;
    }
    /**
     * The push time of the artifact
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
     * The latest pull time of the artifact
     *
     * @return \DateTime|null
     */
    public function getPullTime() : ?\DateTime
    {
        return $this->pullTime;
    }
    /**
     * The latest pull time of the artifact
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
     * 
     *
     * @return mixed[]|null
     */
    public function getExtraAttrs() : ?iterable
    {
        return $this->extraAttrs;
    }
    /**
     * 
     *
     * @param mixed[]|null $extraAttrs
     *
     * @return self
     */
    public function setExtraAttrs(?iterable $extraAttrs) : self
    {
        $this->extraAttrs = $extraAttrs;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAnnotations() : ?iterable
    {
        return $this->annotations;
    }
    /**
     * 
     *
     * @param string[]|null $annotations
     *
     * @return self
     */
    public function setAnnotations(?iterable $annotations) : self
    {
        $this->annotations = $annotations;
        return $this;
    }
    /**
     * 
     *
     * @return Reference[]|null
     */
    public function getReferences() : ?array
    {
        return $this->references;
    }
    /**
     * 
     *
     * @param Reference[]|null $references
     *
     * @return self
     */
    public function setReferences(?array $references) : self
    {
        $this->references = $references;
        return $this;
    }
    /**
     * 
     *
     * @return Tag[]|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param Tag[]|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags) : self
    {
        $this->tags = $tags;
        return $this;
    }
    /**
     * 
     *
     * @return AdditionLink[]|null
     */
    public function getAdditionLinks() : ?iterable
    {
        return $this->additionLinks;
    }
    /**
     * 
     *
     * @param AdditionLink[]|null $additionLinks
     *
     * @return self
     */
    public function setAdditionLinks(?iterable $additionLinks) : self
    {
        $this->additionLinks = $additionLinks;
        return $this;
    }
    /**
     * 
     *
     * @return Label[]|null
     */
    public function getLabels() : ?array
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param Label[]|null $labels
     *
     * @return self
     */
    public function setLabels(?array $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * The scan overview attached in the metadata of tag
     *
     * @return NativeReportSummary[]|null
     */
    public function getScanOverview() : ?iterable
    {
        return $this->scanOverview;
    }
    /**
     * The scan overview attached in the metadata of tag
     *
     * @param NativeReportSummary[]|null $scanOverview
     *
     * @return self
     */
    public function setScanOverview(?iterable $scanOverview) : self
    {
        $this->scanOverview = $scanOverview;
        return $this;
    }
    /**
     * 
     *
     * @return Accessory[]|null
     */
    public function getAccessories() : ?array
    {
        return $this->accessories;
    }
    /**
     * 
     *
     * @param Accessory[]|null $accessories
     *
     * @return self
     */
    public function setAccessories(?array $accessories) : self
    {
        $this->accessories = $accessories;
        return $this;
    }
}