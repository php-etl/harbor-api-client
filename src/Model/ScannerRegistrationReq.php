<?php

namespace Gyroscops\Harbor\Api\Model;

class ScannerRegistrationReq
{
    /**
     * The name of this registration
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
     * A base URL of the scanner adapter.
     *
     * @var string|null
     */
    protected $url;
    /**
    * Specify what authentication approach is adopted for the HTTP communications.
    Supported types Basic", "Bearer" and api key header "X-ScannerAdapter-API-Key"
    
    *
    * @var string|null
    */
    protected $auth;
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
     * Indicate whether the registration is enabled or not
     *
     * @var bool|null
     */
    protected $disabled = false;
    /**
     * The name of this registration
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this registration
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
     * A base URL of the scanner adapter.
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * A base URL of the scanner adapter.
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
}