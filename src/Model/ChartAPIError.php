<?php

namespace Gyroscops\Harbor\Api\Model;

class ChartAPIError
{
    /**
     * The error message returned by the chart API
     *
     * @var string|null
     */
    protected $error;
    /**
     * The error message returned by the chart API
     *
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * The error message returned by the chart API
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
