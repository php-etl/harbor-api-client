<?php

namespace Gyroscops\Harbor\Api\Model;

class RegistryUpdate
{
    /**
     * The registry name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Description of the registry.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The registry URL.
     *
     * @var string|null
     */
    protected $url;
    /**
     * Credential type of the registry, e.g. 'basic'.
     *
     * @var string|null
     */
    protected $credentialType;
    /**
     * The registry access key.
     *
     * @var string|null
     */
    protected $accessKey;
    /**
     * The registry access secret.
     *
     * @var string|null
     */
    protected $accessSecret;
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the server.
     *
     * @var bool|null
     */
    protected $insecure;
    /**
     * The registry name.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The registry name.
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
     * Description of the registry.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of the registry.
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
     * The registry URL.
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * The registry URL.
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
     * Credential type of the registry, e.g. 'basic'.
     *
     * @return string|null
     */
    public function getCredentialType() : ?string
    {
        return $this->credentialType;
    }
    /**
     * Credential type of the registry, e.g. 'basic'.
     *
     * @param string|null $credentialType
     *
     * @return self
     */
    public function setCredentialType(?string $credentialType) : self
    {
        $this->credentialType = $credentialType;
        return $this;
    }
    /**
     * The registry access key.
     *
     * @return string|null
     */
    public function getAccessKey() : ?string
    {
        return $this->accessKey;
    }
    /**
     * The registry access key.
     *
     * @param string|null $accessKey
     *
     * @return self
     */
    public function setAccessKey(?string $accessKey) : self
    {
        $this->accessKey = $accessKey;
        return $this;
    }
    /**
     * The registry access secret.
     *
     * @return string|null
     */
    public function getAccessSecret() : ?string
    {
        return $this->accessSecret;
    }
    /**
     * The registry access secret.
     *
     * @param string|null $accessSecret
     *
     * @return self
     */
    public function setAccessSecret(?string $accessSecret) : self
    {
        $this->accessSecret = $accessSecret;
        return $this;
    }
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the server.
     *
     * @return bool|null
     */
    public function getInsecure() : ?bool
    {
        return $this->insecure;
    }
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the server.
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
}