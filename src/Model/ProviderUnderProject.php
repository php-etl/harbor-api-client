<?php

namespace Gyroscops\Harbor\Api\Model;

class ProviderUnderProject
{
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $provider;
    /**
     * 
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * 
     *
     * @var bool|null
     */
    protected $default;
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getProvider() : ?string
    {
        return $this->provider;
    }
    /**
     * 
     *
     * @param string|null $provider
     *
     * @return self
     */
    public function setProvider(?string $provider) : self
    {
        $this->provider = $provider;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * 
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDefault() : ?bool
    {
        return $this->default;
    }
    /**
     * 
     *
     * @param bool|null $default
     *
     * @return self
     */
    public function setDefault(?bool $default) : self
    {
        $this->default = $default;
        return $this;
    }
}