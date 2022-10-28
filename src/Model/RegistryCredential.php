<?php

namespace Gyroscops\Harbor\Api\Model;

class RegistryCredential
{
    /**
     * Access key, e.g. user name when credential type is 'basic'.
     *
     * @var string|null
     */
    protected $accessKey;
    /**
     * Access secret, e.g. password when credential type is 'basic'.
     *
     * @var string|null
     */
    protected $accessSecret;
    /**
     * Credential type, such as 'basic', 'oauth'.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Access key, e.g. user name when credential type is 'basic'.
     *
     * @return string|null
     */
    public function getAccessKey(): ?string
    {
        return $this->accessKey;
    }
    /**
     * Access key, e.g. user name when credential type is 'basic'.
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
     * Access secret, e.g. password when credential type is 'basic'.
     *
     * @return string|null
     */
    public function getAccessSecret(): ?string
    {
        return $this->accessSecret;
    }
    /**
     * Access secret, e.g. password when credential type is 'basic'.
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
     * Credential type, such as 'basic', 'oauth'.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Credential type, such as 'basic', 'oauth'.
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
}
