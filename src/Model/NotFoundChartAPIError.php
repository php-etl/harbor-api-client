<?php

namespace Gyroscops\Harbor\Api\Model;

class NotFoundChartAPIError
{
    /**
     * The error message returned by the chart API
     *
     * @var string
     */
    protected $error;
    /**
     * The error message returned by the chart API
     *
     * @return string
     */
    public function getError() : string
    {
        return $this->error;
    }
    /**
     * The error message returned by the chart API
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error) : self
    {
        $this->error = $error;
        return $this;
    }
}