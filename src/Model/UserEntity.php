<?php

namespace Gyroscops\Harbor\Api\Model;

class UserEntity
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
     * The ID of the user.
     *
     * @var int|null
     */
    protected $userId;
    /**
     * The name of the user.
     *
     * @var string|null
     */
    protected $username;
    /**
     * The ID of the user.
     *
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * The ID of the user.
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * The name of the user.
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * The name of the user.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
}