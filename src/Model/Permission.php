<?php

namespace Gyroscops\Harbor\Api\Model;

class Permission
{
    /**
     * The permission action
     *
     * @var string|null
     */
    protected $action;
    /**
     * The permission resoruce
     *
     * @var string|null
     */
    protected $resource;
    /**
     * The permission action
     *
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * The permission action
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action): self
    {
        $this->action = $action;
        return $this;
    }
    /**
     * The permission resoruce
     *
     * @return string|null
     */
    public function getResource(): ?string
    {
        return $this->resource;
    }
    /**
     * The permission resoruce
     *
     * @param string|null $resource
     *
     * @return self
     */
    public function setResource(?string $resource): self
    {
        $this->resource = $resource;
        return $this;
    }
}
