<?php

namespace Gyroscops\Harbor\Api\Model;

class PingRegistry
{
    /**
     * The registry access key.
     *
     * @var string|null
     */
    protected $accessKey;
    /**
     * Credential type of the registry, e.g. 'basic'.
     *
     * @var string|null
     */
    protected $credentialType;
    /**
     * The registry access secret.
     *
     * @var string|null
     */
    protected $accessSecret;
    /**
     * The registry address URL string.
     *
     * @var string|null
     */
    protected $url;
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the server.
     *
     * @var bool|null
     */
    protected $insecure;
    /**
     * Type of the registry, e.g. 'harbor'.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The ID of the registry
     *
     * @var int|null
     */
    protected $id;
    /**
     * The registry access key.
     *
     * @return string|null
     */
    public function getAccessKey(): ?string
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
    public function setAccessKey(?string $accessKey): self
    {
        $this->accessKey = $accessKey;
        return $this;
    }
    /**
     * Credential type of the registry, e.g. 'basic'.
     *
     * @return string|null
     */
    public function getCredentialType(): ?string
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
    public function setCredentialType(?string $credentialType): self
    {
        $this->credentialType = $credentialType;
        return $this;
    }
    /**
     * The registry access secret.
     *
     * @return string|null
     */
    public function getAccessSecret(): ?string
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
    public function setAccessSecret(?string $accessSecret): self
    {
        $this->accessSecret = $accessSecret;
        return $this;
    }
    /**
     * The registry address URL string.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * The registry address URL string.
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
     * Whether or not the certificate will be verified when Harbor tries to access the server.
     *
     * @return bool|null
     */
    public function getInsecure(): ?bool
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
    public function setInsecure(?bool $insecure): self
    {
        $this->insecure = $insecure;
        return $this;
    }
    /**
     * Type of the registry, e.g. 'harbor'.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Type of the registry, e.g. 'harbor'.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The ID of the registry
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * The ID of the registry
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
