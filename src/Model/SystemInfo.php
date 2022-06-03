<?php

namespace Gyroscops\Harbor\Api\Model;

class SystemInfo
{
    /**
     * The storage of system.
     *
     * @var Storage[]
     */
    protected $storage;
    /**
     * The storage of system.
     *
     * @return Storage[]
     */
    public function getStorage() : array
    {
        return $this->storage;
    }
    /**
     * The storage of system.
     *
     * @param Storage[] $storage
     *
     * @return self
     */
    public function setStorage(array $storage) : self
    {
        $this->storage = $storage;
        return $this;
    }
}