<?php

namespace Gyroscops\Harbor\Api\Model;

class ChartMetadata
{
    /**
     * The name of template engine
     *
     * @var string
     */
    protected $engine;
    /**
     * A one-sentence description of chart
     *
     * @var string
     */
    protected $description;
    /**
     * Whether or not this chart is deprecated
     *
     * @var bool
     */
    protected $deprecated;
    /**
     * The version of the application enclosed in the chart
     *
     * @var string
     */
    protected $appVersion;
    /**
     * The API version of this chart
     *
     * @var string
     */
    protected $apiVersion;
    /**
     * The name of the chart
     *
     * @var string
     */
    protected $name;
    /**
     * The URL to the source code of chart
     *
     * @var string[]
     */
    protected $sources;
    /**
     * A SemVer 2 version of chart
     *
     * @var string
     */
    protected $version;
    /**
     * A list of string keywords
     *
     * @var string[]
     */
    protected $keywords;
    /**
     * The URL to the relevant project page
     *
     * @var string
     */
    protected $home;
    /**
     * The URL to an icon file
     *
     * @var string
     */
    protected $icon;
    /**
     * The name of template engine
     *
     * @return string
     */
    public function getEngine() : string
    {
        return $this->engine;
    }
    /**
     * The name of template engine
     *
     * @param string $engine
     *
     * @return self
     */
    public function setEngine(string $engine) : self
    {
        $this->engine = $engine;
        return $this;
    }
    /**
     * A one-sentence description of chart
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A one-sentence description of chart
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
     * Whether or not this chart is deprecated
     *
     * @return bool
     */
    public function getDeprecated() : bool
    {
        return $this->deprecated;
    }
    /**
     * Whether or not this chart is deprecated
     *
     * @param bool $deprecated
     *
     * @return self
     */
    public function setDeprecated(bool $deprecated) : self
    {
        $this->deprecated = $deprecated;
        return $this;
    }
    /**
     * The version of the application enclosed in the chart
     *
     * @return string
     */
    public function getAppVersion() : string
    {
        return $this->appVersion;
    }
    /**
     * The version of the application enclosed in the chart
     *
     * @param string $appVersion
     *
     * @return self
     */
    public function setAppVersion(string $appVersion) : self
    {
        $this->appVersion = $appVersion;
        return $this;
    }
    /**
     * The API version of this chart
     *
     * @return string
     */
    public function getApiVersion() : string
    {
        return $this->apiVersion;
    }
    /**
     * The API version of this chart
     *
     * @param string $apiVersion
     *
     * @return self
     */
    public function setApiVersion(string $apiVersion) : self
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }
    /**
     * The name of the chart
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the chart
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
    /**
     * The URL to the source code of chart
     *
     * @return string[]
     */
    public function getSources() : array
    {
        return $this->sources;
    }
    /**
     * The URL to the source code of chart
     *
     * @param string[] $sources
     *
     * @return self
     */
    public function setSources(array $sources) : self
    {
        $this->sources = $sources;
        return $this;
    }
    /**
     * A SemVer 2 version of chart
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * A SemVer 2 version of chart
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * A list of string keywords
     *
     * @return string[]
     */
    public function getKeywords() : array
    {
        return $this->keywords;
    }
    /**
     * A list of string keywords
     *
     * @param string[] $keywords
     *
     * @return self
     */
    public function setKeywords(array $keywords) : self
    {
        $this->keywords = $keywords;
        return $this;
    }
    /**
     * The URL to the relevant project page
     *
     * @return string
     */
    public function getHome() : string
    {
        return $this->home;
    }
    /**
     * The URL to the relevant project page
     *
     * @param string $home
     *
     * @return self
     */
    public function setHome(string $home) : self
    {
        $this->home = $home;
        return $this;
    }
    /**
     * The URL to an icon file
     *
     * @return string
     */
    public function getIcon() : string
    {
        return $this->icon;
    }
    /**
     * The URL to an icon file
     *
     * @param string $icon
     *
     * @return self
     */
    public function setIcon(string $icon) : self
    {
        $this->icon = $icon;
        return $this;
    }
}