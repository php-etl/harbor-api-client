<?php

namespace Gyroscops\Harbor\Api\Model;

class Permissions
{
    /**
     * The system level permissions
     *
     * @var Permission[]|null
     */
    protected $system;
    /**
     * The project level permissions
     *
     * @var Permission[]|null
     */
    protected $project;
    /**
     * The system level permissions
     *
     * @return Permission[]|null
     */
    public function getSystem() : ?array
    {
        return $this->system;
    }
    /**
     * The system level permissions
     *
     * @param Permission[]|null $system
     *
     * @return self
     */
    public function setSystem(?array $system) : self
    {
        $this->system = $system;
        return $this;
    }
    /**
     * The project level permissions
     *
     * @return Permission[]|null
     */
    public function getProject() : ?array
    {
        return $this->project;
    }
    /**
     * The project level permissions
     *
     * @param Permission[]|null $project
     *
     * @return self
     */
    public function setProject(?array $project) : self
    {
        $this->project = $project;
        return $this;
    }
}