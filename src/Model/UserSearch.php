<?php

namespace Gyroscops\Harbor\Api\Model;

class UserSearch
{
    /**
     * The ID of the user.
     *
     * @var int|null
     */
    protected $userId;
    /**
     * 
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
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->username = $username;
        return $this;
    }
}