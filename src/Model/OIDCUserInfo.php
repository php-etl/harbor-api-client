<?php

namespace Gyroscops\Harbor\Api\Model;

class OIDCUserInfo
{
    /**
     * the ID of the OIDC info record
     *
     * @var int|null
     */
    protected $id;
    /**
     * the ID of the user
     *
     * @var int|null
     */
    protected $userId;
    /**
     * the concatenation of sub and issuer in the ID token
     *
     * @var string|null
     */
    protected $subiss;
    /**
     * the secret of the OIDC user that can be used for CLI to push/pull artifacts
     *
     * @var string|null
     */
    protected $secret;
    /**
     * The creation time of the OIDC user info record.
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * The update time of the OIDC user info record.
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * the ID of the OIDC info record
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * the ID of the OIDC info record
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
     * the ID of the user
     *
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * the ID of the user
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * the concatenation of sub and issuer in the ID token
     *
     * @return string|null
     */
    public function getSubiss() : ?string
    {
        return $this->subiss;
    }
    /**
     * the concatenation of sub and issuer in the ID token
     *
     * @param string|null $subiss
     *
     * @return self
     */
    public function setSubiss(?string $subiss) : self
    {
        $this->subiss = $subiss;
        return $this;
    }
    /**
     * the secret of the OIDC user that can be used for CLI to push/pull artifacts
     *
     * @return string|null
     */
    public function getSecret() : ?string
    {
        return $this->secret;
    }
    /**
     * the secret of the OIDC user that can be used for CLI to push/pull artifacts
     *
     * @param string|null $secret
     *
     * @return self
     */
    public function setSecret(?string $secret) : self
    {
        $this->secret = $secret;
        return $this;
    }
    /**
     * The creation time of the OIDC user info record.
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * The creation time of the OIDC user info record.
     *
     * @param \DateTime|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?\DateTime $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The update time of the OIDC user info record.
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * The update time of the OIDC user info record.
     *
     * @param \DateTime|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?\DateTime $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
}