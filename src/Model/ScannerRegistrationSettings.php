<?php

namespace Gyroscops\Harbor\Api\Model;

class ScannerRegistrationSettings
{
    /**
     * A base URL of the scanner adapter.
     *
     * @var string|null
     */
    protected $url;
    /**
     * An optional value of the HTTP Authorization header sent with each request to the Scanner Adapter API.
     *
     * @var string|null
     */
    protected $accessCredential;
    /**
     * The name of this registration
     *
     * @var string|null
     */
    protected $name;
    /**
    * Specify what authentication approach is adopted for the HTTP communications.
    Supported types Basic", "Bearer" and api key header "X-ScannerAdapter-API-Key"

    *
    * @var string|null
    */
    protected $auth = '';
    /**
     * A base URL of the scanner adapter.
     *
     * @return string|null
     */
    public function getUrl(): ?string
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
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * An optional value of the HTTP Authorization header sent with each request to the Scanner Adapter API.
     *
     * @return string|null
     */
    public function getAccessCredential(): ?string
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
    public function setAccessCredential(?string $accessCredential): self
    {
        $this->accessCredential = $accessCredential;
        return $this;
    }
    /**
     * The name of this registration
     *
     * @return string|null
     */
    public function getName(): ?string
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
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
    * Specify what authentication approach is adopted for the HTTP communications.
    Supported types Basic", "Bearer" and api key header "X-ScannerAdapter-API-Key"

    *
    * @return string|null
    */
    public function getAuth(): ?string
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
    public function setAuth(?string $auth): self
    {
        $this->auth = $auth;
        return $this;
    }
}
