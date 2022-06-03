<?php

namespace Gyroscops\Harbor\Api\Model;

class Permission
{
    /**
     * The permission action
     *
     * @var string
     */
    protected $action;
    /**
     * The permission resoruce
     *
     * @var string
     */
    protected $resource;
    /**
     * The permission action
     *
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }
    /**
     * The permission action
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action) : self
    {
        $this->action = $action;
        return $this;
    }
    /**
     * The permission resoruce
     *
     * @return string
     */
    public function getResource() : string
    {
        return $this->resource;
    }
    /**
     * The permission resoruce
     *
     * @param string $resource
     *
     * @return self
     */
    public function setResource(string $resource) : self
    {
        $this->resource = $resource;
        return $this;
    }
}