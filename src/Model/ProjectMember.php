<?php

namespace Harbor\Api\Model;

class ProjectMember
{
    /**
     * The role id 1 for projectAdmin, 2 for developer, 3 for guest, 4 for master
     *
     * @var int
     */
    protected $roleId;
    /**
     * 
     *
     * @var UserGroup
     */
    protected $memberGroup;
    /**
     * 
     *
     * @var UserEntity
     */
    protected $memberUser;
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
    /**
     * 
     *
     * @return UserGroup
     */
    public function getMemberGroup() : UserGroup
    {
        return $this->memberGroup;
    }
    /**
     * 
     *
     * @param UserGroup $memberGroup
     *
     * @return self
     */
    public function setMemberGroup(UserGroup $memberGroup) : self
    {
        $this->memberGroup = $memberGroup;
        return $this;
    }
    /**
     * 
     *
     * @return UserEntity
     */
    public function getMemberUser() : UserEntity
    {
        return $this->memberUser;
    }
    /**
     * 
     *
     * @param UserEntity $memberUser
     *
     * @return self
     */
    public function setMemberUser(UserEntity $memberUser) : self
    {
        $this->memberUser = $memberUser;
        return $this;
    }
}