<?php

namespace Gyroscops\Harbor\Api\Model;

class RobotAccountAccess
{
    /**
     * the action to resource that perdefined in harbor rbac
     *
     * @var string
     */
    protected $action;
    /**
     * the resource of harbor
     *
     * @var string
     */
    protected $resource;
    /**
     * the action to resource that perdefined in harbor rbac
     *
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }
    /**
     * the action to resource that perdefined in harbor rbac
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
     * the resource of harbor
     *
     * @return string
     */
    public function getResource() : string
    {
        return $this->resource;
    }
    /**
     * the resource of harbor
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