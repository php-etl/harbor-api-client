<?php

namespace Gyroscops\Harbor\Api\Model;

class RegistryProviderEndpointPattern
{
    /**
     * The endpoint type
     *
     * @var string|null
     */
    protected $endpointType;
    /**
     * The endpoint list
     *
     * @var RegistryEndpoint[]|null
     */
    protected $endpoints;
    /**
     * The endpoint type
     *
     * @return string|null
     */
    public function getEndpointType() : ?string
    {
        return $this->endpointType;
    }
    /**
     * The endpoint type
     *
     * @param string|null $endpointType
     *
     * @return self
     */
    public function setEndpointType(?string $endpointType) : self
    {
        $this->endpointType = $endpointType;
        return $this;
    }
    /**
     * The endpoint list
     *
     * @return RegistryEndpoint[]|null
     */
    public function getEndpoints() : ?array
    {
        return $this->endpoints;
    }
    /**
     * The endpoint list
     *
     * @param RegistryEndpoint[]|null $endpoints
     *
     * @return self
     */
    public function setEndpoints(?array $endpoints) : self
    {
        $this->endpoints = $endpoints;
        return $this;
    }
}