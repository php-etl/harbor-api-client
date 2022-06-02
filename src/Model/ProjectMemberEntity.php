<?php

namespace Harbor\Api\Model;

class ProjectMemberEntity
{
    /**
     * the id of entity, if the member is a user, it is user_id in user table. if the member is a user group, it is the user group's ID in user_group table.
     *
     * @var int
     */
    protected $entityId;
    /**
     * the name of the role
     *
     * @var string
     */
    protected $roleName;
    /**
     * the name of the group member.
     *
     * @var string
     */
    protected $entityName;
    /**
     * the entity's type, u for user entity, g for group entity.
     *
     * @var string
     */
    protected $entityType;
    /**
     * the project id
     *
     * @var int
     */
    protected $projectId;
    /**
     * the project member id
     *
     * @var int
     */
    protected $id;
    /**
     * the role id
     *
     * @var int
     */
    protected $roleId;
    /**
     * the id of entity, if the member is a user, it is user_id in user table. if the member is a user group, it is the user group's ID in user_group table.
     *
     * @return int
     */
    public function getEntityId() : int
    {
        return $this->entityId;
    }
    /**
     * the id of entity, if the member is a user, it is user_id in user table. if the member is a user group, it is the user group's ID in user_group table.
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId) : self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * the name of the role
     *
     * @return string
     */
    public function getRoleName() : string
    {
        return $this->roleName;
    }
    /**
     * the name of the role
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
     * the name of the group member.
     *
     * @return string
     */
    public function getEntityName() : string
    {
        return $this->entityName;
    }
    /**
     * the name of the group member.
     *
     * @param string $entityName
     *
     * @return self
     */
    public function setEntityName(string $entityName) : self
    {
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * the entity's type, u for user entity, g for group entity.
     *
     * @return string
     */
    public function getEntityType() : string
    {
        return $this->entityType;
    }
    /**
     * the entity's type, u for user entity, g for group entity.
     *
     * @param string $entityType
     *
     * @return self
     */
    public function setEntityType(string $entityType) : self
    {
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * the project id
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * the project id
     *
     * @param int $projectId
     *
     * @return self
     */
    public function setProjectId(int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * the project member id
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * the project member id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * the role id
     *
     * @return int
     */
    public function getRoleId() : int
    {
        return $this->roleId;
    }
    /**
     * the role id
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