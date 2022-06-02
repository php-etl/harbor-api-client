<?php

namespace Harbor\Api\Model;

class ProjectScanner
{
    /**
     * The identifier of the scanner registration
     *
     * @var string
     */
    protected $uuid;
    /**
     * The identifier of the scanner registration
     *
     * @return string
     */
    public function getUuid() : string
    {
        return $this->uuid;
    }
    /**
     * The identifier of the scanner registration
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid) : self
    {
        $this->uuid = $uuid;
        return $this;
    }
}