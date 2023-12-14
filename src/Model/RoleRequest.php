<?php

namespace Gyroscops\Harbor\Api\Model;

class RoleRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The role id 1 for projectAdmin, 2 for developer, 3 for guest, 4 for maintainer
     *
     * @var int|null
     */
    protected $roleId;
    /**
     * The role id 1 for projectAdmin, 2 for developer, 3 for guest, 4 for maintainer
     *
     * @return int|null
     */
    public function getRoleId() : ?int
    {
        return $this->roleId;
    }
    /**
     * The role id 1 for projectAdmin, 2 for developer, 3 for guest, 4 for maintainer
     *
     * @param int|null $roleId
     *
     * @return self
     */
    public function setRoleId(?int $roleId) : self
    {
        $this->initialized['roleId'] = true;
        $this->roleId = $roleId;
        return $this;
    }
}