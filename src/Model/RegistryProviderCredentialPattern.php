<?php

namespace Gyroscops\Harbor\Api\Model;

class RegistryProviderCredentialPattern
{
    /**
     * The access key type
     *
     * @var string|null
     */
    protected $accessKeyType;
    /**
     * The access key data
     *
     * @var string|null
     */
    protected $accessKeyData;
    /**
     * The access secret type
     *
     * @var string|null
     */
    protected $accessSecretType;
    /**
     * The access secret data
     *
     * @var string|null
     */
    protected $accessSecretData;
    /**
     * The access key type
     *
     * @return string|null
     */
    public function getAccessKeyType() : ?string
    {
        return $this->accessKeyType;
    }
    /**
     * The access key type
     *
     * @param string|null $accessKeyType
     *
     * @return self
     */
    public function setAccessKeyType(?string $accessKeyType) : self
    {
        $this->accessKeyType = $accessKeyType;
        return $this;
    }
    /**
     * The access key data
     *
     * @return string|null
     */
    public function getAccessKeyData() : ?string
    {
        return $this->accessKeyData;
    }
    /**
     * The access key data
     *
     * @param string|null $accessKeyData
     *
     * @return self
     */
    public function setAccessKeyData(?string $accessKeyData) : self
    {
        $this->accessKeyData = $accessKeyData;
        return $this;
    }
    /**
     * The access secret type
     *
     * @return string|null
     */
    public function getAccessSecretType() : ?string
    {
        return $this->accessSecretType;
    }
    /**
     * The access secret type
     *
     * @param string|null $accessSecretType
     *
     * @return self
     */
    public function setAccessSecretType(?string $accessSecretType) : self
    {
        $this->accessSecretType = $accessSecretType;
        return $this;
    }
    /**
     * The access secret data
     *
     * @return string|null
     */
    public function getAccessSecretData() : ?string
    {
        return $this->accessSecretData;
    }
    /**
     * The access secret data
     *
     * @param string|null $accessSecretData
     *
     * @return self
     */
    public function setAccessSecretData(?string $accessSecretData) : self
    {
        $this->accessSecretData = $accessSecretData;
        return $this;
    }
}