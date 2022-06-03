<?php

namespace Gyroscops\Harbor\Api\Model;

class RegistryInfo
{
    /**
     * The registry type
     *
     * @var string
     */
    protected $type;
    /**
     * The filters that the registry supports
     *
     * @var FilterStyle[]
     */
    protected $supportedResourceFilters;
    /**
     * The triggers that the registry supports
     *
     * @var string[]
     */
    protected $supportedTriggers;
    /**
     * The description
     *
     * @var string
     */
    protected $description;
    /**
     * The registry type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The registry type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The filters that the registry supports
     *
     * @return FilterStyle[]
     */
    public function getSupportedResourceFilters() : array
    {
        return $this->supportedResourceFilters;
    }
    /**
     * The filters that the registry supports
     *
     * @param FilterStyle[] $supportedResourceFilters
     *
     * @return self
     */
    public function setSupportedResourceFilters(array $supportedResourceFilters) : self
    {
        $this->supportedResourceFilters = $supportedResourceFilters;
        return $this;
    }
    /**
     * The triggers that the registry supports
     *
     * @return string[]
     */
    public function getSupportedTriggers() : array
    {
        return $this->supportedTriggers;
    }
    /**
     * The triggers that the registry supports
     *
     * @param string[] $supportedTriggers
     *
     * @return self
     */
    public function setSupportedTriggers(array $supportedTriggers) : self
    {
        $this->supportedTriggers = $supportedTriggers;
        return $this;
    }
    /**
     * The description
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description
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
}