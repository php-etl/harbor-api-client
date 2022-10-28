<?php

namespace Gyroscops\Harbor\Api\Model;

class LdapFailedImportUsers
{
    /**
     * the uid can't add to system.
     *
     * @var string|null
     */
    protected $ldapUid;
    /**
     * fail reason.
     *
     * @var string|null
     */
    protected $error;
    /**
     * the uid can't add to system.
     *
     * @return string|null
     */
    public function getLdapUid(): ?string
    {
        return $this->ldapUid;
    }
    /**
     * the uid can't add to system.
     *
     * @param string|null $ldapUid
     *
     * @return self
     */
    public function setLdapUid(?string $ldapUid): self
    {
        $this->ldapUid = $ldapUid;
        return $this;
    }
    /**
     * fail reason.
     *
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * fail reason.
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }
}
