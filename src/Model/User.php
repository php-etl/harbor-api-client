<?php

namespace Gyroscops\Harbor\Api\Model;

class User
{
    /**
     *
     *
     * @var string|null
     */
    protected $username;
    /**
     *
     *
     * @var string|null
     */
    protected $comment;
    /**
     *
     *
     * @var string|null
     */
    protected $updateTime;
    /**
     *
     *
     * @var string|null
     */
    protected $password;
    /**
     * The ID of the user.
     *
     * @var int|null
     */
    protected $userId;
    /**
     *
     *
     * @var string|null
     */
    protected $realname;
    /**
     *
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     *
     *
     * @var string|null
     */
    protected $creationTime;
    /**
     * indicate the admin privilege is grant by authenticator (LDAP), is always false unless it is the current login user
     *
     * @var bool|null
     */
    protected $adminRoleInAuth;
    /**
     *
     *
     * @var int|null
     */
    protected $roleId;
    /**
     *
     *
     * @var bool|null
     */
    protected $sysadminFlag;
    /**
     *
     *
     * @var string|null
     */
    protected $roleName;
    /**
     *
     *
     * @var string|null
     */
    protected $resetUuid;
    /**
     *
     *
     * @var string|null
     */
    protected $salt;
    /**
     *
     *
     * @var string|null
     */
    protected $email;
    /**
     *
     *
     * @return string|null
     */
    public function getUsername(): ?string
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
    public function setUsername(?string $username): self
    {
        $this->username = $username;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getComment(): ?string
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
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }
    /**
     *
     *
     * @param string|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     *
     *
     * @param string|null $password
     *
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;
        return $this;
    }
    /**
     * The ID of the user.
     *
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * The ID of the user.
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getRealname(): ?string
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
    public function setRealname(?string $realname): self
    {
        $this->realname = $realname;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     *
     *
     * @param bool|null $deleted
     *
     * @return self
     */
    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     *
     *
     * @param string|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?string $creationTime): self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * indicate the admin privilege is grant by authenticator (LDAP), is always false unless it is the current login user
     *
     * @return bool|null
     */
    public function getAdminRoleInAuth(): ?bool
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
    public function setAdminRoleInAuth(?bool $adminRoleInAuth): self
    {
        $this->adminRoleInAuth = $adminRoleInAuth;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getRoleId(): ?int
    {
        return $this->roleId;
    }
    /**
     *
     *
     * @param int|null $roleId
     *
     * @return self
     */
    public function setRoleId(?int $roleId): self
    {
        $this->roleId = $roleId;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getSysadminFlag(): ?bool
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
    public function setSysadminFlag(?bool $sysadminFlag): self
    {
        $this->sysadminFlag = $sysadminFlag;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }
    /**
     *
     *
     * @param string|null $roleName
     *
     * @return self
     */
    public function setRoleName(?string $roleName): self
    {
        $this->roleName = $roleName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getResetUuid(): ?string
    {
        return $this->resetUuid;
    }
    /**
     *
     *
     * @param string|null $resetUuid
     *
     * @return self
     */
    public function setResetUuid(?string $resetUuid): self
    {
        $this->resetUuid = $resetUuid;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSalt(): ?string
    {
        return $this->salt;
    }
    /**
     *
     *
     * @param string|null $salt
     *
     * @return self
     */
    public function setSalt(?string $salt): self
    {
        $this->salt = $salt;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEmail(): ?string
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
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
}
