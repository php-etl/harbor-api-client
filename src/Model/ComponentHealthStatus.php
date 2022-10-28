<?php

namespace Gyroscops\Harbor\Api\Model;

class ComponentHealthStatus
{
    /**
     * The health status of component
     *
     * @var string|null
     */
    protected $status;
    /**
     * The component name
     *
     * @var string|null
     */
    protected $name;
    /**
     * (optional) The error message when the status is "unhealthy"
     *
     * @var string|null
     */
    protected $error;
    /**
     * The health status of component
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The health status of component
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The component name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The component name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * (optional) The error message when the status is "unhealthy"
     *
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * (optional) The error message when the status is "unhealthy"
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }
}
