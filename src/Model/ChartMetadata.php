<?php

namespace Gyroscops\Harbor\Api\Model;

class ChartMetadata
{
    /**
     * The name of template engine
     *
     * @var string|null
     */
    protected $engine;
    /**
     * A one-sentence description of chart
     *
     * @var string|null
     */
    protected $description;
    /**
     * Whether or not this chart is deprecated
     *
     * @var bool|null
     */
    protected $deprecated;
    /**
     * The version of the application enclosed in the chart
     *
     * @var string|null
     */
    protected $appVersion;
    /**
     * The API version of this chart
     *
     * @var string|null
     */
    protected $apiVersion;
    /**
     * The name of the chart
     *
     * @var string|null
     */
    protected $name;
    /**
     * The URL to the source code of chart
     *
     * @var string[]|null
     */
    protected $sources;
    /**
     * A SemVer 2 version of chart
     *
     * @var string|null
     */
    protected $version;
    /**
     * A list of string keywords
     *
     * @var string[]|null
     */
    protected $keywords;
    /**
     * The URL to the relevant project page
     *
     * @var string|null
     */
    protected $home;
    /**
     * The URL to an icon file
     *
     * @var string|null
     */
    protected $icon;
    /**
     * The name of template engine
     *
     * @return string|null
     */
    public function getEngine(): ?string
    {
        return $this->engine;
    }
    /**
     * The name of template engine
     *
     * @param string|null $engine
     *
     * @return self
     */
    public function setEngine(?string $engine): self
    {
        $this->engine = $engine;
        return $this;
    }
    /**
     * A one-sentence description of chart
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * A one-sentence description of chart
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
     * Whether or not this chart is deprecated
     *
     * @return bool|null
     */
    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
    }
    /**
     * Whether or not this chart is deprecated
     *
     * @param bool|null $deprecated
     *
     * @return self
     */
    public function setDeprecated(?bool $deprecated): self
    {
        $this->deprecated = $deprecated;
        return $this;
    }
    /**
     * The version of the application enclosed in the chart
     *
     * @return string|null
     */
    public function getAppVersion(): ?string
    {
        return $this->appVersion;
    }
    /**
     * The version of the application enclosed in the chart
     *
     * @param string|null $appVersion
     *
     * @return self
     */
    public function setAppVersion(?string $appVersion): self
    {
        $this->appVersion = $appVersion;
        return $this;
    }
    /**
     * The API version of this chart
     *
     * @return string|null
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }
    /**
     * The API version of this chart
     *
     * @param string|null $apiVersion
     *
     * @return self
     */
    public function setApiVersion(?string $apiVersion): self
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }
    /**
     * The name of the chart
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The name of the chart
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
    /**
     * The URL to the source code of chart
     *
     * @return string[]|null
     */
    public function getSources(): ?array
    {
        return $this->sources;
    }
    /**
     * The URL to the source code of chart
     *
     * @param string[]|null $sources
     *
     * @return self
     */
    public function setSources(?array $sources): self
    {
        $this->sources = $sources;
        return $this;
    }
    /**
     * A SemVer 2 version of chart
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * A SemVer 2 version of chart
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * A list of string keywords
     *
     * @return string[]|null
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }
    /**
     * A list of string keywords
     *
     * @param string[]|null $keywords
     *
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }
    /**
     * The URL to the relevant project page
     *
     * @return string|null
     */
    public function getHome(): ?string
    {
        return $this->home;
    }
    /**
     * The URL to the relevant project page
     *
     * @param string|null $home
     *
     * @return self
     */
    public function setHome(?string $home): self
    {
        $this->home = $home;
        return $this;
    }
    /**
     * The URL to an icon file
     *
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }
    /**
     * The URL to an icon file
     *
     * @param string|null $icon
     *
     * @return self
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }
}
