<?php

namespace Gyroscops\Harbor\Api\Model;

class Reference
{
    /**
     * The parent ID of the reference
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * The child ID of the reference
     *
     * @var int|null
     */
    protected $childId;
    /**
     * The digest of the child artifact
     *
     * @var string|null
     */
    protected $childDigest;
    /**
     * 
     *
     * @var Platform|null
     */
    protected $platform;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $annotations;
    /**
     * The download URLs
     *
     * @var string[]|null
     */
    protected $urls;
    /**
     * The parent ID of the reference
     *
     * @return int|null
     */
    public function getParentId() : ?int
    {
        return $this->parentId;
    }
    /**
     * The parent ID of the reference
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId) : self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * The child ID of the reference
     *
     * @return int|null
     */
    public function getChildId() : ?int
    {
        return $this->childId;
    }
    /**
     * The child ID of the reference
     *
     * @param int|null $childId
     *
     * @return self
     */
    public function setChildId(?int $childId) : self
    {
        $this->childId = $childId;
        return $this;
    }
    /**
     * The digest of the child artifact
     *
     * @return string|null
     */
    public function getChildDigest() : ?string
    {
        return $this->childDigest;
    }
    /**
     * The digest of the child artifact
     *
     * @param string|null $childDigest
     *
     * @return self
     */
    public function setChildDigest(?string $childDigest) : self
    {
        $this->childDigest = $childDigest;
        return $this;
    }
    /**
     * 
     *
     * @return Platform|null
     */
    public function getPlatform() : ?Platform
    {
        return $this->platform;
    }
    /**
     * 
     *
     * @param Platform|null $platform
     *
     * @return self
     */
    public function setPlatform(?Platform $platform) : self
    {
        $this->platform = $platform;
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
     * The download URLs
     *
     * @return string[]|null
     */
    public function getUrls() : ?array
    {
        return $this->urls;
    }
    /**
     * The download URLs
     *
     * @param string[]|null $urls
     *
     * @return self
     */
    public function setUrls(?array $urls) : self
    {
        $this->urls = $urls;
        return $this;
    }
}