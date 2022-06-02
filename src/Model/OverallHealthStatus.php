<?php

namespace Harbor\Api\Model;

class OverallHealthStatus
{
    /**
     * The overall health status. It is "healthy" only when all the components' status are "healthy"
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var ComponentHealthStatus[]
     */
    protected $components;
    /**
     * The overall health status. It is "healthy" only when all the components' status are "healthy"
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The overall health status. It is "healthy" only when all the components' status are "healthy"
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentHealthStatus[]
     */
    public function getComponents() : array
    {
        return $this->components;
    }
    /**
     * 
     *
     * @param ComponentHealthStatus[] $components
     *
     * @return self
     */
    public function setComponents(array $components) : self
    {
        $this->components = $components;
        return $this;
    }
}