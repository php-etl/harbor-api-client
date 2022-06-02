<?php

namespace Harbor\Api\Model;

class Role
{
    /**
     * 
     *
     * @var string
     */
    protected $roleMask;
    /**
     * Name the the role.
     *
     * @var string
     */
    protected $roleName;
    /**
     * Description of permissions for the role.
     *
     * @var string
     */
    protected $roleCode;
    /**
     * ID in table.
     *
     * @var int
     */
    protected $roleId;
    /**
     * 
     *
     * @return string
     */
    public function getRoleMask() : string
    {
        return $this->roleMask;
    }
    /**
     * 
     *
     * @param string $roleMask
     *
     * @return self
     */
    public function setRoleMask(string $roleMask) : self
    {
        $this->roleMask = $roleMask;
        return $this;
    }
    /**
     * Name the the role.
     *
     * @return string
     */
    public function getRoleName() : string
    {
        return $this->roleName;
    }
    /**
     * Name the the role.
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
     * Description of permissions for the role.
     *
     * @return string
     */
    public function getRoleCode() : string
    {
        return $this->roleCode;
    }
    /**
     * Description of permissions for the role.
     *
     * @param string $roleCode
     *
     * @return self
     */
    public function setRoleCode(string $roleCode) : self
    {
        $this->roleCode = $roleCode;
        return $this;
    }
    /**
     * ID in table.
     *
     * @return int
     */
    public function getRoleId() : int
    {
        return $this->roleId;
    }
    /**
     * ID in table.
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
}