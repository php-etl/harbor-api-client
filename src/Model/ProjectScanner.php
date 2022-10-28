<?php

namespace Gyroscops\Harbor\Api\Model;

class ProjectScanner
{
    /**
     * The identifier of the scanner registration
     *
     * @var string|null
     */
    protected $uuid;
    /**
     * The identifier of the scanner registration
     *
     * @return string|null
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }
    /**
     * The identifier of the scanner registration
     *
     * @param string|null $uuid
     *
     * @return self
     */
    public function setUuid(?string $uuid): self
    {
        $this->uuid = $uuid;
        return $this;
    }
}
