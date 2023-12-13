<?php

namespace Gyroscops\Harbor\Api\Model;

class ProjectMember
{
    /**
     * The role id 1 for projectAdmin, 2 for developer, 3 for guest, 4 for maintainer
     *
     * @var int|null
     */
    protected $roleId;
    /**
     * 
     *
     * @var UserEntity|null
     */
    protected $memberUser;
    /**
     * 
     *
     * @var UserGroup|null
     */
    protected $memberGroup;
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
        $this->roleId = $roleId;
        return $this;
    }
    /**
     * 
     *
     * @return UserEntity|null
     */
    public function getMemberUser() : ?UserEntity
    {
        return $this->memberUser;
    }
    /**
     * 
     *
     * @param UserEntity|null $memberUser
     *
     * @return self
     */
    public function setMemberUser(?UserEntity $memberUser) : self
    {
        $this->memberUser = $memberUser;
        return $this;
    }
    /**
     * 
     *
     * @return UserGroup|null
     */
    public function getMemberGroup() : ?UserGroup
    {
        return $this->memberGroup;
    }
    /**
     * 
     *
     * @param UserGroup|null $memberGroup
     *
     * @return self
     */
    public function setMemberGroup(?UserGroup $memberGroup) : self
    {
        $this->memberGroup = $memberGroup;
        return $this;
    }
}