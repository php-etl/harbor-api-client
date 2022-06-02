<?php

namespace Harbor\Api\Model;

class UsersUserIdCliSecretPutBody
{
    /**
     * The new secret
     *
     * @var string
     */
    protected $secret;
    /**
     * The new secret
     *
     * @return string
     */
    public function getSecret() : string
    {
        return $this->secret;
    }
    /**
     * The new secret
     *
     * @param string $secret
     *
     * @return self
     */
    public function setSecret(string $secret) : self
    {
        $this->secret = $secret;
        return $this;
    }
}