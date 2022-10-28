<?php

namespace Gyroscops\Harbor\Api\Model;

class SystemInfo
{
    /**
     * The storage of system.
     *
     * @var Storage[]|null
     */
    protected $storage;
    /**
     * The storage of system.
     *
     * @return Storage[]|null
     */
    public function getStorage(): ?array
    {
        return $this->storage;
    }
    /**
     * The storage of system.
     *
     * @param Storage[]|null $storage
     *
     * @return self
     */
    public function setStorage(?array $storage): self
    {
        $this->storage = $storage;
        return $this;
    }
}
