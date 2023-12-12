<?php

namespace Gyroscops\Harbor\Api\Model;

class OverallHealthStatus
{
    /**
     * The overall health status. It is "healthy" only when all the components' status are "healthy"
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var ComponentHealthStatus[]|null
     */
    protected $components;
    /**
     * The overall health status. It is "healthy" only when all the components' status are "healthy"
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The overall health status. It is "healthy" only when all the components' status are "healthy"
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentHealthStatus[]|null
     */
    public function getComponents() : ?array
    {
        return $this->components;
    }
    /**
     * 
     *
     * @param ComponentHealthStatus[]|null $components
     *
     * @return self
     */
    public function setComponents(?array $components) : self
    {
        $this->components = $components;
        return $this;
    }
}