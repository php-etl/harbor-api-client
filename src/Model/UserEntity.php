<?php

namespace Gyroscops\Harbor\Api\Model;

class UserEntity
{
    /**
     * The name of the user.
     *
     * @var string
     */
    protected $username;
    /**
     * The ID of the user.
     *
     * @var int
     */
    protected $userId;
    /**
     * The name of the user.
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * The name of the user.
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
     * The ID of the user.
     *
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }
    /**
     * The ID of the user.
     *
     * @param int $userId
     *
     * @return self
     */
    public function setUserId(int $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
}