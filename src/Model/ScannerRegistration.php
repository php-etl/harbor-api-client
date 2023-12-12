<?php

namespace Gyroscops\Harbor\Api\Model;

class ScannerRegistration
{
    /**
     * The unique identifier of this registration.
     *
     * @var string|null
     */
    protected $uuid;
    /**
     * The name of this registration.
     *
     * @var string|null
     */
    protected $name;
    /**
     * An optional description of this registration.
     *
     * @var string|null
     */
    protected $description;
    /**
     * A base URL of the scanner adapter
     *
     * @var string|null
     */
    protected $url;
    /**
     * Indicate whether the registration is enabled or not
     *
     * @var bool|null
     */
    protected $disabled = false;
    /**
     * Indicate if the registration is set as the system default one
     *
     * @var bool|null
     */
    protected $isDefault = false;
    /**
    * Specify what authentication approach is adopted for the HTTP communications.
    Supported types Basic", "Bearer" and api key header "X-ScannerAdapter-API-Key"
    
    *
    * @var string|null
    */
    protected $auth = '';
    /**
     * An optional value of the HTTP Authorization header sent with each request to the Scanner Adapter API.
     *
     * @var string|null
     */
    protected $accessCredential;
    /**
     * Indicate if skip the certificate verification when sending HTTP requests
     *
     * @var bool|null
     */
    protected $skipCertVerify = false;
    /**
     * Indicate whether use internal registry addr for the scanner to pull content or not
     *
     * @var bool|null
     */
    protected $useInternalAddr = false;
    /**
     * The creation time of this registration
     *
     * @var \DateTime|null
     */
    protected $createTime;
    /**
     * The update time of this registration
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * Optional property to describe the name of the scanner registration
     *
     * @var string|null
     */
    protected $adapter;
    /**
     * Optional property to describe the vendor of the scanner registration
     *
     * @var string|null
     */
    protected $vendor;
    /**
     * Optional property to describe the version of the scanner registration
     *
     * @var string|null
     */
    protected $version;
    /**
     * Indicate the healthy of the registration
     *
     * @var string|null
     */
    protected $health = '';
    /**
     * The unique identifier of this registration.
     *
     * @return string|null
     */
    public function getUuid() : ?string
    {
        return $this->uuid;
    }
    /**
     * The unique identifier of this registration.
     *
     * @param string|null $uuid
     *
     * @return self
     */
    public function setUuid(?string $uuid) : self
    {
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * The name of this registration.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this registration.
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
     * An optional description of this registration.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * An optional description of this registration.
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
     * A base URL of the scanner adapter
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * A base URL of the scanner adapter
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * Indicate whether the registration is enabled or not
     *
     * @return bool|null
     */
    public function getDisabled() : ?bool
    {
        return $this->disabled;
    }
    /**
     * Indicate whether the registration is enabled or not
     *
     * @param bool|null $disabled
     *
     * @return self
     */
    public function setDisabled(?bool $disabled) : self
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * Indicate if the registration is set as the system default one
     *
     * @return bool|null
     */
    public function getIsDefault() : ?bool
    {
        return $this->isDefault;
    }
    /**
     * Indicate if the registration is set as the system default one
     *
     * @param bool|null $isDefault
     *
     * @return self
     */
    public function setIsDefault(?bool $isDefault) : self
    {
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
    * Specify what authentication approach is adopted for the HTTP communications.
    Supported types Basic", "Bearer" and api key header "X-ScannerAdapter-API-Key"
    
    *
    * @return string|null
    */
    public function getAuth() : ?string
    {
        return $this->auth;
    }
    /**
    * Specify what authentication approach is adopted for the HTTP communications.
    Supported types Basic", "Bearer" and api key header "X-ScannerAdapter-API-Key"
    
    *
    * @param string|null $auth
    *
    * @return self
    */
    public function setAuth(?string $auth) : self
    {
        $this->auth = $auth;
        return $this;
    }
    /**
     * An optional value of the HTTP Authorization header sent with each request to the Scanner Adapter API.
     *
     * @return string|null
     */
    public function getAccessCredential() : ?string
    {
        return $this->accessCredential;
    }
    /**
     * An optional value of the HTTP Authorization header sent with each request to the Scanner Adapter API.
     *
     * @param string|null $accessCredential
     *
     * @return self
     */
    public function setAccessCredential(?string $accessCredential) : self
    {
        $this->accessCredential = $accessCredential;
        return $this;
    }
    /**
     * Indicate if skip the certificate verification when sending HTTP requests
     *
     * @return bool|null
     */
    public function getSkipCertVerify() : ?bool
    {
        return $this->skipCertVerify;
    }
    /**
     * Indicate if skip the certificate verification when sending HTTP requests
     *
     * @param bool|null $skipCertVerify
     *
     * @return self
     */
    public function setSkipCertVerify(?bool $skipCertVerify) : self
    {
        $this->skipCertVerify = $skipCertVerify;
        return $this;
    }
    /**
     * Indicate whether use internal registry addr for the scanner to pull content or not
     *
     * @return bool|null
     */
    public function getUseInternalAddr() : ?bool
    {
        return $this->useInternalAddr;
    }
    /**
     * Indicate whether use internal registry addr for the scanner to pull content or not
     *
     * @param bool|null $useInternalAddr
     *
     * @return self
     */
    public function setUseInternalAddr(?bool $useInternalAddr) : self
    {
        $this->useInternalAddr = $useInternalAddr;
        return $this;
    }
    /**
     * The creation time of this registration
     *
     * @return \DateTime|null
     */
    public function getCreateTime() : ?\DateTime
    {
        return $this->createTime;
    }
    /**
     * The creation time of this registration
     *
     * @param \DateTime|null $createTime
     *
     * @return self
     */
    public function setCreateTime(?\DateTime $createTime) : self
    {
        $this->createTime = $createTime;
        return $this;
    }
    /**
     * The update time of this registration
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * The update time of this registration
     *
     * @param \DateTime|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?\DateTime $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     * Optional property to describe the name of the scanner registration
     *
     * @return string|null
     */
    public function getAdapter() : ?string
    {
        return $this->adapter;
    }
    /**
     * Optional property to describe the name of the scanner registration
     *
     * @param string|null $adapter
     *
     * @return self
     */
    public function setAdapter(?string $adapter) : self
    {
        $this->adapter = $adapter;
        return $this;
    }
    /**
     * Optional property to describe the vendor of the scanner registration
     *
     * @return string|null
     */
    public function getVendor() : ?string
    {
        return $this->vendor;
    }
    /**
     * Optional property to describe the vendor of the scanner registration
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
     * Optional property to describe the version of the scanner registration
     *
     * @return string|null
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * Optional property to describe the version of the scanner registration
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
     * Indicate the healthy of the registration
     *
     * @return string|null
     */
    public function getHealth() : ?string
    {
        return $this->health;
    }
    /**
     * Indicate the healthy of the registration
     *
     * @param string|null $health
     *
     * @return self
     */
    public function setHealth(?string $health) : self
    {
        $this->health = $health;
        return $this;
    }
}