<?php

namespace Gyroscops\Harbor\Api\Model;

class Instance
{
    /**
     * Unique ID
     *
     * @var int|null
     */
    protected $id;
    /**
     * Instance name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Description of instance
     *
     * @var string|null
     */
    protected $description;
    /**
     * Based on which driver, identified by ID
     *
     * @var string|null
     */
    protected $vendor;
    /**
     * The service endpoint of this instance
     *
     * @var string|null
     */
    protected $endpoint;
    /**
     * The authentication way supported
     *
     * @var string|null
     */
    protected $authMode;
    /**
     * The auth credential data if exists
     *
     * @var string[]|null
     */
    protected $authInfo;
    /**
     * The health status
     *
     * @var string|null
     */
    protected $status;
    /**
     * Whether the instance is activated or not
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * Whether the instance is default or not
     *
     * @var bool|null
     */
    protected $default;
    /**
     * Whether the instance endpoint is insecure or not
     *
     * @var bool|null
     */
    protected $insecure;
    /**
     * The timestamp of instance setting up
     *
     * @var int|null
     */
    protected $setupTimestamp;
    /**
     * Unique ID
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID
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
     * Instance name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Instance name
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
     * Description of instance
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of instance
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
     * Based on which driver, identified by ID
     *
     * @return string|null
     */
    public function getVendor() : ?string
    {
        return $this->vendor;
    }
    /**
     * Based on which driver, identified by ID
     *
     * @param string|null $vendor
     *
     * @return self
     */
    public function setVendor(?string $vendor) : self
    {
        $this->vendor = $vendor;
        return $this;
    }
    /**
     * The service endpoint of this instance
     *
     * @return string|null
     */
    public function getEndpoint() : ?string
    {
        return $this->endpoint;
    }
    /**
     * The service endpoint of this instance
     *
     * @param string|null $endpoint
     *
     * @return self
     */
    public function setEndpoint(?string $endpoint) : self
    {
        $this->endpoint = $endpoint;
        return $this;
    }
    /**
     * The authentication way supported
     *
     * @return string|null
     */
    public function getAuthMode() : ?string
    {
        return $this->authMode;
    }
    /**
     * The authentication way supported
     *
     * @param string|null $authMode
     *
     * @return self
     */
    public function setAuthMode(?string $authMode) : self
    {
        $this->authMode = $authMode;
        return $this;
    }
    /**
     * The auth credential data if exists
     *
     * @return string[]|null
     */
    public function getAuthInfo() : ?iterable
    {
        return $this->authInfo;
    }
    /**
     * The auth credential data if exists
     *
     * @param string[]|null $authInfo
     *
     * @return self
     */
    public function setAuthInfo(?iterable $authInfo) : self
    {
        $this->authInfo = $authInfo;
        return $this;
    }
    /**
     * The health status
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The health status
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Whether the instance is activated or not
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * Whether the instance is activated or not
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
     * Whether the instance is default or not
     *
     * @return bool|null
     */
    public function getDefault() : ?bool
    {
        return $this->default;
    }
    /**
     * Whether the instance is default or not
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
    /**
     * Whether the instance endpoint is insecure or not
     *
     * @return bool|null
     */
    public function getInsecure() : ?bool
    {
        return $this->insecure;
    }
    /**
     * Whether the instance endpoint is insecure or not
     *
     * @param bool|null $insecure
     *
     * @return self
     */
    public function setInsecure(?bool $insecure) : self
    {
        $this->insecure = $insecure;
        return $this;
    }
    /**
     * The timestamp of instance setting up
     *
     * @return int|null
     */
    public function getSetupTimestamp() : ?int
    {
        return $this->setupTimestamp;
    }
    /**
     * The timestamp of instance setting up
     *
     * @param int|null $setupTimestamp
     *
     * @return self
     */
    public function setSetupTimestamp(?int $setupTimestamp) : self
    {
        $this->setupTimestamp = $setupTimestamp;
        return $this;
    }
}