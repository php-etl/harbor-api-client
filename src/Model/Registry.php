<?php

namespace Gyroscops\Harbor\Api\Model;

class Registry
{
    /**
     * The registry ID.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The registry URL string.
     *
     * @var string|null
     */
    protected $url;
    /**
     * The registry name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var RegistryCredential|null
     */
    protected $credential;
    /**
     * Type of the registry, e.g. 'harbor'.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Whether or not the certificate will be verified when Harbor tries to access the server.
     *
     * @var bool|null
     */
    protected $insecure;
    /**
     * Description of the registry.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Health status of the registry.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The create time of the policy.
     *
     * @var \DateTimeInterface|null
     */
    protected $creationTime;
    /**
     * The update time of the policy.
     *
     * @var \DateTimeInterface|null
     */
    protected $updateTime;
    /**
     * The registry ID.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The registry ID.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The registry URL string.
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * The registry URL string.
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
     * 
     *
     * @return RegistryCredential|null
     */
    public function getCredential() : ?RegistryCredential
    {
        return $this->credential;
    }
    /**
     * 
     *
     * @param RegistryCredential|null $credential
     *
     * @return self
     */
    public function setCredential(?RegistryCredential $credential) : self
    {
        $this->credential = $credential;
        return $this;
    }
    /**
     * Type of the registry, e.g. 'harbor'.
     *
     * @return string|null
     */
    public function getType() : ?string
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
    public function setType(?string $type) : self
    {
        $this->type = $type;
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
     * Health status of the registry.
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * Health status of the registry.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The create time of the policy.
     *
     * @return \DateTimeInterface|null
     */
    public function getCreationTime() : ?\DateTimeInterface
    {
        return $this->creationTime;
    }
    /**
     * The create time of the policy.
     *
     * @param \DateTimeInterface|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?\DateTimeInterface $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The update time of the policy.
     *
     * @return \DateTimeInterface|null
     */
    public function getUpdateTime() : ?\DateTimeInterface
    {
        return $this->updateTime;
    }
    /**
     * The update time of the policy.
     *
     * @param \DateTimeInterface|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?\DateTimeInterface $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
}