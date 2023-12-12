<?php

namespace Gyroscops\Harbor\Api\Model;

class Error
{
    /**
     * The error code
     *
     * @var string|null
     */
    protected $code;
    /**
     * The error message
     *
     * @var string|null
     */
    protected $message;
    /**
     * The error code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * The error code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * The error message
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * The error message
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