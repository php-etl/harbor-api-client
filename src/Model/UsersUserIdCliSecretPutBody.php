<?php

namespace Gyroscops\Harbor\Api\Model;

class UsersUserIdCliSecretPutBody
{
    /**
     * The new secret
     *
     * @var string|null
     */
    protected $secret;
    /**
     * The new secret
     *
     * @return string|null
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }
    /**
     * The new secret
     *
     * @param string|null $secret
     *
     * @return self
     */
    public function setSecret(?string $secret): self
    {
        $this->secret = $secret;
        return $this;
    }
}
