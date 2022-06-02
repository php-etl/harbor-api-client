<?php

namespace Harbor\Api\Model;

class ScannerRegistrationReq
{
    /**
     * The name of this registration
     *
     * @var string
     */
    protected $name;
    /**
     * A base URL of the scanner adapter.
     *
     * @var string
     */
    protected $url;
    /**
     * An optional value of the HTTP Authorization header sent with each request to the Scanner Adapter API.
     *
     * @var string
     */
    protected $accessCredential;
    /**
    * Specify what authentication approach is adopted for the HTTP communications.
    Supported types Basic", "Bearer" and api key header "X-ScannerAdapter-API-Key"
    
    *
    * @var string
    */
    protected $auth = '';
    /**
     * Indicate whether the registration is enabled or not
     *
     * @var bool
     */
    protected $disabled = false;
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
     * An optional description of this registration.
     *
     * @var string
     */
    protected $description;
    /**
     * The name of this registration
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of this registration
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
     * A base URL of the scanner adapter.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * A base URL of the scanner adapter.
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
}