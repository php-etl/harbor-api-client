<?php

namespace Gyroscops\Harbor\Api\Model;

class RoleParam
{
    /**
     * Username relevant to a project role member.
     *
     * @var string|null
     */
    protected $username;
    /**
     * Role ID for updating project role member.
     *
     * @var int[]|null
     */
    protected $roles;
    /**
     * Username relevant to a project role member.
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }
    /**
     * Username relevant to a project role member.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username): self
    {
        $this->username = $username;
        return $this;
    }
    /**
     * Role ID for updating project role member.
     *
     * @return int[]|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }
    /**
     * Role ID for updating project role member.
     *
     * @param int[]|null $roles
     *
     * @return self
     */
    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }
}
