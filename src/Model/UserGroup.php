<?php

namespace Harbor\Api\Model;

class UserGroup
{
    /**
     * The name of the user group
     *
     * @var string
     */
    protected $groupName;
    /**
     * The DN of the LDAP group if group type is 1 (LDAP group).
     *
     * @var string
     */
    protected $ldapGroupDn;
    /**
     * The group type, 1 for LDAP group, 2 for HTTP group.
     *
     * @var int
     */
    protected $groupType;
    /**
     * The ID of the user group
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the user group
     *
     * @return string
     */
    public function getGroupName() : string
    {
        return $this->groupName;
    }
    /**
     * The name of the user group
     *
     * @param string $groupName
     *
     * @return self
     */
    public function setGroupName(string $groupName) : self
    {
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * The DN of the LDAP group if group type is 1 (LDAP group).
     *
     * @return string
     */
    public function getLdapGroupDn() : string
    {
        return $this->ldapGroupDn;
    }
    /**
     * The DN of the LDAP group if group type is 1 (LDAP group).
     *
     * @param string $ldapGroupDn
     *
     * @return self
     */
    public function setLdapGroupDn(string $ldapGroupDn) : self
    {
        $this->ldapGroupDn = $ldapGroupDn;
        return $this;
    }
    /**
     * The group type, 1 for LDAP group, 2 for HTTP group.
     *
     * @return int
     */
    public function getGroupType() : int
    {
        return $this->groupType;
    }
    /**
     * The group type, 1 for LDAP group, 2 for HTTP group.
     *
     * @param int $groupType
     *
     * @return self
     */
    public function setGroupType(int $groupType) : self
    {
        $this->groupType = $groupType;
        return $this;
    }
    /**
     * The ID of the user group
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The ID of the user group
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
}