<?php

namespace Gyroscops\Harbor\Api\Model;

class ScannerAdapterMetadata
{
    /**
     * 
     *
     * @var Scanner
     */
    protected $name;
    /**
     * 
     *
     * @var ScannerCapability[]
     */
    protected $capabilities;
    /**
     * 
     *
     * @var string[]
     */
    protected $properties;
    /**
     * 
     *
     * @return Scanner
     */
    public function getName() : Scanner
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param Scanner $name
     *
     * @return self
     */
    public function setName(Scanner $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return ScannerCapability[]
     */
    public function getCapabilities() : array
    {
        return $this->capabilities;
    }
    /**
     * 
     *
     * @param ScannerCapability[] $capabilities
     *
     * @return self
     */
    public function setCapabilities(array $capabilities) : self
    {
        $this->capabilities = $capabilities;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getProperties() : iterable
    {
        return $this->properties;
    }
    /**
     * 
     *
     * @param string[] $properties
     *
     * @return self
     */
    public function setProperties(iterable $properties) : self
    {
        $this->properties = $properties;
        return $this;
    }
}