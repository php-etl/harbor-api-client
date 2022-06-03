<?php

namespace Gyroscops\Harbor\Api\Model;

class User
{
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * 
     *
     * @var string
     */
    protected $comment;
    /**
     * 
     *
     * @var string
     */
    protected $updateTime;
    /**
     * 
     *
     * @var string
     */
    protected $password;
    /**
     * The ID of the user.
     *
     * @var int
     */
    protected $userId;
    /**
     * 
     *
     * @var string
     */
    protected $realname;
    /**
     * 
     *
     * @var bool
     */
    protected $deleted;
    /**
     * 
     *
     * @var string
     */
    protected $creationTime;
    /**
     * indicate the admin privilege is grant by authenticator (LDAP), is always false unless it is the current login user
     *
     * @var bool
     */
    protected $adminRoleInAuth;
    /**
     * 
     *
     * @var int
     */
    protected $roleId;
    /**
     * 
     *
     * @var bool
     */
    protected $sysadminFlag;
    /**
     * 
     *
     * @var string
     */
    protected $roleName;
    /**
     * 
     *
     * @var string
     */
    protected $resetUuid;
    /**
     * 
     *
     * @var string
     */
    protected $salt;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->username = $username;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdateTime() : string
    {
        return $this->updateTime;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password) : self
    {
        $this->password = $password;
        return $this;
    }
    /**
     * The ID of the user.
     *
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }
    /**
     * The ID of the user.
     *
     * @param int $userId
     *
     * @return self
     */
    public function setUserId(int $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRealname() : string
    {
        return $this->realname;
    }
    /**
     * 
     *
     * @param string $realname
     *
     * @return self
     */
    public function setRealname(string $realname) : self
    {
        $this->realname = $realname;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDeleted() : bool
    {
        return $this->deleted;
    }
    /**
     * 
     *
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted) : self
    {
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreationTime() : string
    {
        return $this->creationTime;
    }
    /**
     * 
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
     * indicate the admin privilege is grant by authenticator (LDAP), is always false unless it is the current login user
     *
     * @return bool
     */
    public function getAdminRoleInAuth() : bool
    {
        return $this->adminRoleInAuth;
    }
    /**
     * indicate the admin privilege is grant by authenticator (LDAP), is always false unless it is the current login user
     *
     * @param bool $adminRoleInAuth
     *
     * @return self
     */
    public function setAdminRoleInAuth(bool $adminRoleInAuth) : self
    {
        $this->adminRoleInAuth = $adminRoleInAuth;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRoleId() : int
    {
        return $this->roleId;
    }
    /**
     * 
     *
     * @param int $roleId
     *
     * @return self
     */
    public function setRoleId(int $roleId) : self
    {
        $this->roleId = $roleId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSysadminFlag() : bool
    {
        return $this->sysadminFlag;
    }
    /**
     * 
     *
     * @param bool $sysadminFlag
     *
     * @return self
     */
    public function setSysadminFlag(bool $sysadminFlag) : self
    {
        $this->sysadminFlag = $sysadminFlag;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRoleName() : string
    {
        return $this->roleName;
    }
    /**
     * 
     *
     * @param string $roleName
     *
     * @return self
     */
    public function setRoleName(string $roleName) : self
    {
        $this->roleName = $roleName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResetUuid() : string
    {
        return $this->resetUuid;
    }
    /**
     * 
     *
     * @param string $resetUuid
     *
     * @return self
     */
    public function setResetUuid(string $resetUuid) : self
    {
        $this->resetUuid = $resetUuid;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalt() : string
    {
        return $this->salt;
    }
    /**
     * 
     *
     * @param string $salt
     *
     * @return self
     */
    public function setSalt(string $salt) : self
    {
        $this->salt = $salt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
}