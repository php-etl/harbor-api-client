<?php

namespace Gyroscops\Harbor\Api\Model;

class LdapFailedImportUser
{
    /**
     * the uid can't add to system.
     *
     * @var string|null
     */
    protected $uid;
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
    public function getUid() : ?string
    {
        return $this->uid;
    }
    /**
     * the uid can't add to system.
     *
     * @param string|null $uid
     *
     * @return self
     */
    public function setUid(?string $uid) : self
    {
        $this->uid = $uid;
        return $this;
    }
    /**
     * fail reason.
     *
     * @return string|null
     */
    public function getError() : ?string
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
    public function setError(?string $error) : self
    {
        $this->error = $error;
        return $this;
    }
}