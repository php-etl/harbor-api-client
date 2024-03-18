<?php

namespace Gyroscops\Harbor\Api\Model;

class ProjectMemberEntity
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
     * the project member id
     *
     * @var int|null
     */
    protected $id;
    /**
     * the project id
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * the name of the group member.
     *
     * @var string|null
     */
    protected $entityName;
    /**
     * the name of the role
     *
     * @var string|null
     */
    protected $roleName;
    /**
     * the role id
     *
     * @var int|null
     */
    protected $roleId;
    /**
     * the id of entity, if the member is a user, it is user_id in user table. if the member is a user group, it is the user group's ID in user_group table.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * the entity's type, u for user entity, g for group entity.
     *
     * @var string|null
     */
    protected $entityType;
    /**
     * the project member id
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * the project member id
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * the project id
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * the project id
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * the name of the group member.
     *
     * @return string|null
     */
    public function getEntityName() : ?string
    {
        return $this->entityName;
    }
    /**
     * the name of the group member.
     *
     * @param string|null $entityName
     *
     * @return self
     */
    public function setEntityName(?string $entityName) : self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * the name of the role
     *
     * @return string|null
     */
    public function getRoleName() : ?string
    {
        return $this->roleName;
    }
    /**
     * the name of the role
     *
     * @param string|null $roleName
     *
     * @return self
     */
    public function setRoleName(?string $roleName) : self
    {
        $this->initialized['roleName'] = true;
        $this->roleName = $roleName;
        return $this;
    }
    /**
     * the role id
     *
     * @return int|null
     */
    public function getRoleId() : ?int
    {
        return $this->roleId;
    }
    /**
     * the role id
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
    /**
     * the id of entity, if the member is a user, it is user_id in user table. if the member is a user group, it is the user group's ID in user_group table.
     *
     * @return int|null
     */
    public function getEntityId() : ?int
    {
        return $this->entityId;
    }
    /**
     * the id of entity, if the member is a user, it is user_id in user table. if the member is a user group, it is the user group's ID in user_group table.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId) : self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * the entity's type, u for user entity, g for group entity.
     *
     * @return string|null
     */
    public function getEntityType() : ?string
    {
        return $this->entityType;
    }
    /**
     * the entity's type, u for user entity, g for group entity.
     *
     * @param string|null $entityType
     *
     * @return self
     */
    public function setEntityType(?string $entityType) : self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;
        return $this;
    }
}