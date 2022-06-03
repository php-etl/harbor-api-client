<?php

namespace Gyroscops\Harbor\Api\Model;

class RegistryCredential
{
    /**
     * Access key, e.g. user name when credential type is 'basic'.
     *
     * @var string
     */
    protected $accessKey;
    /**
     * Access secret, e.g. password when credential type is 'basic'.
     *
     * @var string
     */
    protected $accessSecret;
    /**
     * Credential type, such as 'basic', 'oauth'.
     *
     * @var string
     */
    protected $type;
    /**
     * Access key, e.g. user name when credential type is 'basic'.
     *
     * @return string
     */
    public function getAccessKey() : string
    {
        return $this->accessKey;
    }
    /**
     * Access key, e.g. user name when credential type is 'basic'.
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
     * Access secret, e.g. password when credential type is 'basic'.
     *
     * @return string
     */
    public function getAccessSecret() : string
    {
        return $this->accessSecret;
    }
    /**
     * Access secret, e.g. password when credential type is 'basic'.
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
     * Credential type, such as 'basic', 'oauth'.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Credential type, such as 'basic', 'oauth'.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}