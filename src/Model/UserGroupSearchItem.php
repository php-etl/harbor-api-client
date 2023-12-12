<?php

namespace Gyroscops\Harbor\Api\Model;

class UserGroupSearchItem
{
    /**
     * The ID of the user group
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name of the user group
     *
     * @var string|null
     */
    protected $groupName;
    /**
     * The group type, 1 for LDAP group, 2 for HTTP group, 3 for OIDC group.
     *
     * @var int|null
     */
    protected $groupType;
    /**
     * The ID of the user group
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of the user group
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The name of the user group
     *
     * @return string|null
     */
    public function getGroupName() : ?string
    {
        return $this->groupName;
    }
    /**
     * The name of the user group
     *
     * @param string|null $groupName
     *
     * @return self
     */
    public function setGroupName(?string $groupName) : self
    {
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * The group type, 1 for LDAP group, 2 for HTTP group, 3 for OIDC group.
     *
     * @return int|null
     */
    public function getGroupType() : ?int
    {
        return $this->groupType;
    }
    /**
     * The group type, 1 for LDAP group, 2 for HTTP group, 3 for OIDC group.
     *
     * @param int|null $groupType
     *
     * @return self
     */
    public function setGroupType(?int $groupType) : self
    {
        $this->groupType = $groupType;
        return $this;
    }
}