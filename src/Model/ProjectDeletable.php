<?php

namespace Gyroscops\Harbor\Api\Model;

class ProjectDeletable
{
    /**
     * Whether the project can be deleted.
     *
     * @var bool|null
     */
    protected $deletable;
    /**
     * The detail message when the project can not be deleted.
     *
     * @var string|null
     */
    protected $message;
    /**
     * Whether the project can be deleted.
     *
     * @return bool|null
     */
    public function getDeletable() : ?bool
    {
        return $this->deletable;
    }
    /**
     * Whether the project can be deleted.
     *
     * @param bool|null $deletable
     *
     * @return self
     */
    public function setDeletable(?bool $deletable) : self
    {
        $this->deletable = $deletable;
        return $this;
    }
    /**
     * The detail message when the project can not be deleted.
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * The detail message when the project can not be deleted.
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