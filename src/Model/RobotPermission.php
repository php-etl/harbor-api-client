<?php

namespace Gyroscops\Harbor\Api\Model;

class RobotPermission
{
    /**
     * The kind of the permission
     *
     * @var string|null
     */
    protected $kind;
    /**
     * The namespace of the permission
     *
     * @var string|null
     */
    protected $namespace;
    /**
     * 
     *
     * @var Access[]|null
     */
    protected $access;
    /**
     * The kind of the permission
     *
     * @return string|null
     */
    public function getKind() : ?string
    {
        return $this->kind;
    }
    /**
     * The kind of the permission
     *
     * @param string|null $kind
     *
     * @return self
     */
    public function setKind(?string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * The namespace of the permission
     *
     * @return string|null
     */
    public function getNamespace() : ?string
    {
        return $this->namespace;
    }
    /**
     * The namespace of the permission
     *
     * @param string|null $namespace
     *
     * @return self
     */
    public function setNamespace(?string $namespace) : self
    {
        $this->namespace = $namespace;
        return $this;
    }
    /**
     * 
     *
     * @return Access[]|null
     */
    public function getAccess() : ?array
    {
        return $this->access;
    }
    /**
     * 
     *
     * @param Access[]|null $access
     *
     * @return self
     */
    public function setAccess(?array $access) : self
    {
        $this->access = $access;
        return $this;
    }
}