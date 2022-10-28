<?php

namespace Gyroscops\Harbor\Api\Model;

class Role
{
    /**
     *
     *
     * @var string|null
     */
    protected $roleMask;
    /**
     * Name the the role.
     *
     * @var string|null
     */
    protected $roleName;
    /**
     * Description of permissions for the role.
     *
     * @var string|null
     */
    protected $roleCode;
    /**
     * ID in table.
     *
     * @var int|null
     */
    protected $roleId;
    /**
     *
     *
     * @return string|null
     */
    public function getRoleMask(): ?string
    {
        return $this->roleMask;
    }
    /**
     *
     *
     * @param string|null $roleMask
     *
     * @return self
     */
    public function setRoleMask(?string $roleMask): self
    {
        $this->roleMask = $roleMask;
        return $this;
    }
    /**
     * Name the the role.
     *
     * @return string|null
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }
    /**
     * Name the the role.
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
     * Description of permissions for the role.
     *
     * @return string|null
     */
    public function getRoleCode(): ?string
    {
        return $this->roleCode;
    }
    /**
     * Description of permissions for the role.
     *
     * @param string|null $roleCode
     *
     * @return self
     */
    public function setRoleCode(?string $roleCode): self
    {
        $this->roleCode = $roleCode;
        return $this;
    }
    /**
     * ID in table.
     *
     * @return int|null
     */
    public function getRoleId(): ?int
    {
        return $this->roleId;
    }
    /**
     * ID in table.
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
}
