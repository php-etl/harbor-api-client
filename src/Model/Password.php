<?php

namespace Gyroscops\Harbor\Api\Model;

class Password
{
    /**
     * New password for marking as to be updated.
     *
     * @var string
     */
    protected $newPassword;
    /**
     * The user's existing password.
     *
     * @var string
     */
    protected $oldPassword;
    /**
     * New password for marking as to be updated.
     *
     * @return string
     */
    public function getNewPassword() : string
    {
        return $this->newPassword;
    }
    /**
     * New password for marking as to be updated.
     *
     * @param string $newPassword
     *
     * @return self
     */
    public function setNewPassword(string $newPassword) : self
    {
        $this->newPassword = $newPassword;
        return $this;
    }
    /**
     * The user's existing password.
     *
     * @return string
     */
    public function getOldPassword() : string
    {
        return $this->oldPassword;
    }
    /**
     * The user's existing password.
     *
     * @param string $oldPassword
     *
     * @return self
     */
    public function setOldPassword(string $oldPassword) : self
    {
        $this->oldPassword = $oldPassword;
        return $this;
    }
}