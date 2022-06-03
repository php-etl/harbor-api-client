<?php

namespace Gyroscops\Harbor\Api\Model;

class PutRegistry
{
    /**
     * The registry access key.
     *
     * @var string
     */
    protected $accessKey;
    /**
     * Credential type of the registry, e.g. 'basic'.
     *
     * @var string
     */
    protected $credentialType;
    /**
     * The registry name.
     *
     * @var string
     */
    protected $name;
    /**
     * The registry access secret.
     *
     * @var string
     */
    protected $accessSecret;
    /**
     * The registry address URL string.
     *
     * @var string
     */
    protected $url;
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the server.
     *
     * @var bool
     */
    protected $insecure;
    /**
     * Description of the registry.
     *
     * @var string
     */
    protected $description;
    /**
     * The registry access key.
     *
     * @return string
     */
    public function getAccessKey() : string
    {
        return $this->accessKey;
    }
    /**
     * The registry access key.
     *
     * @param string $accessKey
     *
     * @return self
     */
    public function setAccessKey(string $accessKey) : self
    {
        $this->accessKey = $accessKey;
        return $this;
    }
    /**
     * Credential type of the registry, e.g. 'basic'.
     *
     * @return string
     */
    public function getCredentialType() : string
    {
        return $this->credentialType;
    }
    /**
     * Credential type of the registry, e.g. 'basic'.
     *
     * @param string $credentialType
     *
     * @return self
     */
    public function setCredentialType(string $credentialType) : self
    {
        $this->credentialType = $credentialType;
        return $this;
    }
    /**
     * The registry name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The registry name.
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
     * The registry access secret.
     *
     * @return string
     */
    public function getAccessSecret() : string
    {
        return $this->accessSecret;
    }
    /**
     * The registry access secret.
     *
     * @param string $accessSecret
     *
     * @return self
     */
    public function setAccessSecret(string $accessSecret) : self
    {
        $this->accessSecret = $accessSecret;
        return $this;
    }
    /**
     * The registry address URL string.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The registry address URL string.
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
     * Whether or not the certificate will be verified when Harbor tries to access the server.
     *
     * @return bool
     */
    public function getInsecure() : bool
    {
        return $this->insecure;
    }
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the server.
     *
     * @param bool $insecure
     *
     * @return self
     */
    public function setInsecure(bool $insecure) : self
    {
        $this->insecure = $insecure;
        return $this;
    }
    /**
     * Description of the registry.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the registry.
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