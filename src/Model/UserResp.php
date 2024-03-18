<?php

namespace Gyroscops\Harbor\Api\Model;

class UserResp
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var string|null
     */
    protected $realname;
    /**
     * 
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @var int|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $username;
    /**
     * 
     *
     * @var bool|null
     */
    protected $sysadminFlag;
    /**
     * indicate the admin privilege is grant by authenticator (LDAP), is always false unless it is the current login user
     *
     * @var bool|null
     */
    protected $adminRoleInAuth;
    /**
     * 
     *
     * @var OIDCUserInfo|null
     */
    protected $oidcUserMeta;
    /**
     * The creation time of the user.
     *
     * @var \DateTimeInterface|null
     */
    protected $creationTime;
    /**
     * The update time of the user.
     *
     * @var \DateTimeInterface|null
     */
    protected $updateTime;
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRealname() : ?string
    {
        return $this->realname;
    }
    /**
     * 
     *
     * @param string|null $realname
     *
     * @return self
     */
    public function setRealname(?string $realname) : self
    {
        $this->initialized['realname'] = true;
        $this->realname = $realname;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSysadminFlag() : ?bool
    {
        return $this->sysadminFlag;
    }
    /**
     * 
     *
     * @param bool|null $sysadminFlag
     *
     * @return self
     */
    public function setSysadminFlag(?bool $sysadminFlag) : self
    {
        $this->initialized['sysadminFlag'] = true;
        $this->sysadminFlag = $sysadminFlag;
        return $this;
    }
    /**
     * indicate the admin privilege is grant by authenticator (LDAP), is always false unless it is the current login user
     *
     * @return bool|null
     */
    public function getAdminRoleInAuth() : ?bool
    {
        return $this->adminRoleInAuth;
    }
    /**
     * indicate the admin privilege is grant by authenticator (LDAP), is always false unless it is the current login user
     *
     * @param bool|null $adminRoleInAuth
     *
     * @return self
     */
    public function setAdminRoleInAuth(?bool $adminRoleInAuth) : self
    {
        $this->initialized['adminRoleInAuth'] = true;
        $this->adminRoleInAuth = $adminRoleInAuth;
        return $this;
    }
    /**
     * 
     *
     * @return OIDCUserInfo|null
     */
    public function getOidcUserMeta() : ?OIDCUserInfo
    {
        return $this->oidcUserMeta;
    }
    /**
     * 
     *
     * @param OIDCUserInfo|null $oidcUserMeta
     *
     * @return self
     */
    public function setOidcUserMeta(?OIDCUserInfo $oidcUserMeta) : self
    {
        $this->initialized['oidcUserMeta'] = true;
        $this->oidcUserMeta = $oidcUserMeta;
        return $this;
    }
    /**
     * The creation time of the user.
     *
     * @return \DateTimeInterface|null
     */
    public function getCreationTime() : ?\DateTimeInterface
    {
        return $this->creationTime;
    }
    /**
     * The creation time of the user.
     *
     * @param \DateTimeInterface|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?\DateTimeInterface $creationTime) : self
    {
        $this->initialized['creationTime'] = true;
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The update time of the user.
     *
     * @return \DateTimeInterface|null
     */
    public function getUpdateTime() : ?\DateTimeInterface
    {
        return $this->updateTime;
    }
    /**
     * The update time of the user.
     *
     * @param \DateTimeInterface|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?\DateTimeInterface $updateTime) : self
    {
        $this->initialized['updateTime'] = true;
        $this->updateTime = $updateTime;
        return $this;
    }
}