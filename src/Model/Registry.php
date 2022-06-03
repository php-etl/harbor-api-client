<?php

namespace Gyroscops\Harbor\Api\Model;

class Registry
{
    /**
     * Health status of the registry.
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var RegistryCredential
     */
    protected $credential;
    /**
     * The update time of the policy.
     *
     * @var string
     */
    protected $updateTime;
    /**
     * The registry name.
     *
     * @var string
     */
    protected $name;
    /**
     * The registry URL string.
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
     * The create time of the policy.
     *
     * @var string
     */
    protected $creationTime;
    /**
     * Type of the registry, e.g. 'harbor'.
     *
     * @var string
     */
    protected $type;
    /**
     * The registry ID.
     *
     * @var int
     */
    protected $id;
    /**
     * Description of the registry.
     *
     * @var string
     */
    protected $description;
    /**
     * Health status of the registry.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Health status of the registry.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return RegistryCredential
     */
    public function getCredential() : RegistryCredential
    {
        return $this->credential;
    }
    /**
     * 
     *
     * @param RegistryCredential $credential
     *
     * @return self
     */
    public function setCredential(RegistryCredential $credential) : self
    {
        $this->credential = $credential;
        return $this;
    }
    /**
     * The update time of the policy.
     *
     * @return string
     */
    public function getUpdateTime() : string
    {
        return $this->updateTime;
    }
    /**
     * The update time of the policy.
     *
     * @param string $updateTime
     *
     * @return self
     */
    public function setUpdateTime(string $updateTime) : self
    {
        $this->updateTime = $updateTime;
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
     * The registry URL string.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The registry URL string.
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
     * The create time of the policy.
     *
     * @return string
     */
    public function getCreationTime() : string
    {
        return $this->creationTime;
    }
    /**
     * The create time of the policy.
     *
     * @param string $creationTime
     *
     * @return self
     */
    public function setCreationTime(string $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Type of the registry, e.g. 'harbor'.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Type of the registry, e.g. 'harbor'.
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
    /**
     * The registry ID.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The registry ID.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
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