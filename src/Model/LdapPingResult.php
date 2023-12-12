<?php

namespace Gyroscops\Harbor\Api\Model;

class LdapPingResult
{
    /**
     * Test success
     *
     * @var bool|null
     */
    protected $success;
    /**
     * The ping operation output message.
     *
     * @var string|null
     */
    protected $message;
    /**
     * Test success
     *
     * @return bool|null
     */
    public function getSuccess() : ?bool
    {
        return $this->success;
    }
    /**
     * Test success
     *
     * @param bool|null $success
     *
     * @return self
     */
    public function setSuccess(?bool $success) : self
    {
        $this->success = $success;
        return $this;
    }
    /**
     * The ping operation output message.
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * The ping operation output message.
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}