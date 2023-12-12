<?php

namespace Gyroscops\Harbor\Api\Model;

class RegistryProviderInfo
{
    /**
     * The registry endpoint pattern
     *
     * @var RegistryProviderEndpointPattern|null
     */
    protected $endpointPattern;
    /**
     * The registry credential pattern
     *
     * @var RegistryProviderCredentialPattern|null
     */
    protected $credentialPattern;
    /**
     * The registry endpoint pattern
     *
     * @return RegistryProviderEndpointPattern|null
     */
    public function getEndpointPattern() : ?RegistryProviderEndpointPattern
    {
        return $this->endpointPattern;
    }
    /**
     * The registry endpoint pattern
     *
     * @param RegistryProviderEndpointPattern|null $endpointPattern
     *
     * @return self
     */
    public function setEndpointPattern(?RegistryProviderEndpointPattern $endpointPattern) : self
    {
        $this->endpointPattern = $endpointPattern;
        return $this;
    }
    /**
     * The registry credential pattern
     *
     * @return RegistryProviderCredentialPattern|null
     */
    public function getCredentialPattern() : ?RegistryProviderCredentialPattern
    {
        return $this->credentialPattern;
    }
    /**
     * The registry credential pattern
     *
     * @param RegistryProviderCredentialPattern|null $credentialPattern
     *
     * @return self
     */
    public function setCredentialPattern(?RegistryProviderCredentialPattern $credentialPattern) : self
    {
        $this->credentialPattern = $credentialPattern;
        return $this;
    }
}