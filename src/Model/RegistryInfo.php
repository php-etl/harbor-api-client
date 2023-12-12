<?php

namespace Gyroscops\Harbor\Api\Model;

class RegistryInfo
{
    /**
     * The registry type
     *
     * @var string|null
     */
    protected $type;
    /**
     * The description
     *
     * @var string|null
     */
    protected $description;
    /**
     * The filters that the registry supports
     *
     * @var FilterStyle[]|null
     */
    protected $supportedResourceFilters;
    /**
     * The triggers that the registry supports
     *
     * @var string[]|null
     */
    protected $supportedTriggers;
    /**
     * The registry whether support copy by chunk.
     *
     * @var bool|null
     */
    protected $supportedCopyByChunk;
    /**
     * The registry type
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The registry type
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
     * The description
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The description
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
     * The filters that the registry supports
     *
     * @return FilterStyle[]|null
     */
    public function getSupportedResourceFilters() : ?array
    {
        return $this->supportedResourceFilters;
    }
    /**
     * The filters that the registry supports
     *
     * @param FilterStyle[]|null $supportedResourceFilters
     *
     * @return self
     */
    public function setSupportedResourceFilters(?array $supportedResourceFilters) : self
    {
        $this->supportedResourceFilters = $supportedResourceFilters;
        return $this;
    }
    /**
     * The triggers that the registry supports
     *
     * @return string[]|null
     */
    public function getSupportedTriggers() : ?array
    {
        return $this->supportedTriggers;
    }
    /**
     * The triggers that the registry supports
     *
     * @param string[]|null $supportedTriggers
     *
     * @return self
     */
    public function setSupportedTriggers(?array $supportedTriggers) : self
    {
        $this->supportedTriggers = $supportedTriggers;
        return $this;
    }
    /**
     * The registry whether support copy by chunk.
     *
     * @return bool|null
     */
    public function getSupportedCopyByChunk() : ?bool
    {
        return $this->supportedCopyByChunk;
    }
    /**
     * The registry whether support copy by chunk.
     *
     * @param bool|null $supportedCopyByChunk
     *
     * @return self
     */
    public function setSupportedCopyByChunk(?bool $supportedCopyByChunk) : self
    {
        $this->supportedCopyByChunk = $supportedCopyByChunk;
        return $this;
    }
}