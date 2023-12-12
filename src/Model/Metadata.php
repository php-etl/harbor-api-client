<?php

namespace Gyroscops\Harbor\Api\Model;

class Metadata
{
    /**
     * id
     *
     * @var string|null
     */
    protected $id;
    /**
     * name
     *
     * @var string|null
     */
    protected $name;
    /**
     * icon
     *
     * @var string|null
     */
    protected $icon;
    /**
     * maintainers
     *
     * @var string[]|null
     */
    protected $maintainers;
    /**
     * version
     *
     * @var string|null
     */
    protected $version;
    /**
     * source
     *
     * @var string|null
     */
    protected $source;
    /**
     * id
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * id
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * name
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
     * icon
     *
     * @return string|null
     */
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    /**
     * icon
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
     * maintainers
     *
     * @return string[]|null
     */
    public function getMaintainers() : ?array
    {
        return $this->maintainers;
    }
    /**
     * maintainers
     *
     * @param string[]|null $maintainers
     *
     * @return self
     */
    public function setMaintainers(?array $maintainers) : self
    {
        $this->maintainers = $maintainers;
        return $this;
    }
    /**
     * version
     *
     * @return string|null
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * version
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * source
     *
     * @return string|null
     */
    public function getSource() : ?string
    {
        return $this->source;
    }
    /**
     * source
     *
     * @param string|null $source
     *
     * @return self
     */
    public function setSource(?string $source) : self
    {
        $this->source = $source;
        return $this;
    }
}