<?php

namespace Harbor\Api\Model;

class RoleRequest
{
    /**
     * The role id 1 for projectAdmin, 2 for developer, 3 for guest, 4 for master
     *
     * @var int
     */
    protected $roleId;
    /**
     * The role id 1 for projectAdmin, 2 for developer, 3 for guest, 4 for master
     *
     * @return int
     */
    public function getRoleId() : int
    {
        return $this->roleId;
    }
    /**
     * The role id 1 for projectAdmin, 2 for developer, 3 for guest, 4 for master
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