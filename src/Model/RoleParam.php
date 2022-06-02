<?php

namespace Harbor\Api\Model;

class RoleParam
{
    /**
     * Username relevant to a project role member.
     *
     * @var string
     */
    protected $username;
    /**
     * Role ID for updating project role member.
     *
     * @var int[]
     */
    protected $roles;
    /**
     * Username relevant to a project role member.
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * Username relevant to a project role member.
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->username = $username;
        return $this;
    }
    /**
     * Role ID for updating project role member.
     *
     * @return int[]
     */
    public function getRoles() : array
    {
        return $this->roles;
    }
    /**
     * Role ID for updating project role member.
     *
     * @param int[] $roles
     *
     * @return self
     */
    public function setRoles(array $roles) : self
    {
        $this->roles = $roles;
        return $this;
    }
}