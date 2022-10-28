<?php

namespace Gyroscops\Harbor\Api\Model;

class Password
{
    /**
     * New password for marking as to be updated.
     *
     * @var string|null
     */
    protected $newPassword;
    /**
     * The user's existing password.
     *
     * @var string|null
     */
    protected $oldPassword;
    /**
     * New password for marking as to be updated.
     *
     * @return string|null
     */
    public function getNewPassword(): ?string
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
    public function setNewPassword(?string $newPassword): self
    {
        $this->newPassword = $newPassword;
        return $this;
    }
    /**
     * The user's existing password.
     *
     * @return string|null
     */
    public function getOldPassword(): ?string
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
    public function setOldPassword(?string $oldPassword): self
    {
        $this->oldPassword = $oldPassword;
        return $this;
    }
}
