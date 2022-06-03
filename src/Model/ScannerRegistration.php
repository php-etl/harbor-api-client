<?php

namespace Gyroscops\Harbor\Api\Model;

class ScannerRegistration
{
    /**
     * Indicate whether the registration is enabled or not
     *
     * @var bool
     */
    protected $disabled = false;
    /**
     * Optional property to describe the vendor of the scanner registration
     *
     * @var string
     */
    protected $vendor;
    /**
     * An optional description of this registration.
     *
     * @var string
     */
    protected $description;
    /**
     * A base URL of the scanner adapter
     *
     * @var string
     */
    protected $url;
    /**
     * Optional property to describe the name of the scanner registration
     *
     * @var string
     */
    protected $adapter;
    /**
     * An optional value of the HTTP Authorization header sent with each request to the Scanner Adapter API.
     *
     * @var string
     */
    protected $accessCredential;
    /**
     * The unique identifier of this registration.
     *
     * @var string
     */
    protected $uuid;
    /**
    * Specify what authentication approach is adopted for the HTTP communications.
    Supported types Basic", "Bearer" and api key header "X-ScannerAdapter-API-Key"
    
    *
    * @var string
    */
    protected $auth = '';
    /**
     * Indicate if the registration is set as the system default one
     *
     * @var bool
     */
    protected $isDefault = false;
    /**
     * Optional property to describe the version of the scanner registration
     *
     * @var string
     */
    protected $version;
    /**
     * Indicate the healthy of the registration
     *
     * @var string
     */
    protected $health = '';
    /**
     * Indicate whether use internal registry addr for the scanner to pull content or not
     *
     * @var bool
     */
    protected $useInternalAddr = false;
    /**
     * Indicate if skip the certificate verification when sending HTTP requests
     *
     * @var bool
     */
    protected $skipCertVerify = false;
    /**
     * The name of this registration.
     *
     * @var string
     */
    protected $name;
    /**
     * Indicate whether the registration is enabled or not
     *
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * Indicate whether the registration is enabled or not
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled) : self
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * Optional property to describe the vendor of the scanner registration
     *
     * @return string
     */
    public function getVendor() : string
    {
        return $this->vendor;
    }
    /**
     * Optional property to describe the vendor of the scanner registration
     *
     * @param string $vendor
     *
     * @return self
     */
    public function setVendor(string $vendor) : self
    {
        $this->vendor = $vendor;
        return $this;
    }
    /**
     * An optional description of this registration.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * An optional description of this registration.
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
     * A base URL of the scanner adapter
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * A base URL of the scanner adapter
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * Optional property to describe the name of the scanner registration
     *
     * @return string
     */
    public function getAdapter() : string
    {
        return $this->adapter;
    }
    /**
     * Optional property to describe the name of the scanner registration
     *
     * @param string $adapter
     *
     * @return self
     */
    public function setAdapter(string $adapter) : self
    {
        $this->adapter = $adapter;
        return $this;
    }
    /**
     * An optional value of the HTTP Authorization header sent with each request to the Scanner Adapter API.
     *
     * @return string
     */
    public function getAccessCredential() : string
    {
        return $this->accessCredential;
    }
    /**
     * An optional value of the HTTP Authorization header sent with each request to the Scanner Adapter API.
     *
     * @param string $accessCredential
     *
     * @return self
     */
    public function setAccessCredential(string $accessCredential) : self
    {
        $this->accessCredential = $accessCredential;
        return $this;
    }
    /**
     * The unique identifier of this registration.
     *
     * @return string
     */
    public function getUuid() : string
    {
        return $this->uuid;
    }
    /**
     * The unique identifier of this registration.
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid) : self
    {
        $this->uuid = $uuid;
        return $this;
    }
    /**
    * Specify what authentication approach is adopted for the HTTP communications.
    Supported types Basic", "Bearer" and api key header "X-ScannerAdapter-API-Key"
    
    *
    * @return string
    */
    public function getAuth() : string
    {
        return $this->auth;
    }
    /**
    * Specify what authentication approach is adopted for the HTTP communications.
    Supported types Basic", "Bearer" and api key header "X-ScannerAdapter-API-Key"
    
    *
    * @param string $auth
    *
    * @return self
    */
    public function setAuth(string $auth) : self
    {
        $this->auth = $auth;
        return $this;
    }
    /**
     * Indicate if the registration is set as the system default one
     *
     * @return bool
     */
    public function getIsDefault() : bool
    {
        return $this->isDefault;
    }
    /**
     * Indicate if the registration is set as the system default one
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault) : self
    {
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * Optional property to describe the version of the scanner registration
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * Optional property to describe the version of the scanner registration
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
     * Indicate the healthy of the registration
     *
     * @return string
     */
    public function getHealth() : string
    {
        return $this->health;
    }
    /**
     * Indicate the healthy of the registration
     *
     * @param string $health
     *
     * @return self
     */
    public function setHealth(string $health) : self
    {
        $this->health = $health;
        return $this;
    }
    /**
     * Indicate whether use internal registry addr for the scanner to pull content or not
     *
     * @return bool
     */
    public function getUseInternalAddr() : bool
    {
        return $this->useInternalAddr;
    }
    /**
     * Indicate whether use internal registry addr for the scanner to pull content or not
     *
     * @param bool $useInternalAddr
     *
     * @return self
     */
    public function setUseInternalAddr(bool $useInternalAddr) : self
    {
        $this->useInternalAddr = $useInternalAddr;
        return $this;
    }
    /**
     * Indicate if skip the certificate verification when sending HTTP requests
     *
     * @return bool
     */
    public function getSkipCertVerify() : bool
    {
        return $this->skipCertVerify;
    }
    /**
     * Indicate if skip the certificate verification when sending HTTP requests
     *
     * @param bool $skipCertVerify
     *
     * @return self
     */
    public function setSkipCertVerify(bool $skipCertVerify) : self
    {
        $this->skipCertVerify = $skipCertVerify;
        return $this;
    }
    /**
     * The name of this registration.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of this registration.
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
}