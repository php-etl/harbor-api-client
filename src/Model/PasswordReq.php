<?php

namespace Gyroscops\Harbor\Api\Model;

class PasswordReq
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
     * The user's existing password.
     *
     * @var string|null
     */
    protected $oldPassword;
    /**
     * New password for marking as to be updated.
     *
     * @var string|null
     */
    protected $newPassword;
    /**
     * The user's existing password.
     *
     * @return string|null
     */
    public function getOldPassword() : ?string
    {
        return $this->oldPassword;
    }
    /**
     * The user's existing password.
     *
     * @param string|null $oldPassword
     *
     * @return self
     */
    public function setOldPassword(?string $oldPassword) : self
    {
        $this->initialized['oldPassword'] = true;
        $this->oldPassword = $oldPassword;
        return $this;
    }
    /**
     * New password for marking as to be updated.
     *
     * @return string|null
     */
    public function getNewPassword() : ?string
    {
        return $this->newPassword;
    }
    /**
     * New password for marking as to be updated.
     *
     * @param string|null $newPassword
     *
     * @return self
     */
    public function setNewPassword(?string $newPassword) : self
    {
        $this->initialized['newPassword'] = true;
        $this->newPassword = $newPassword;
        return $this;
    }
}