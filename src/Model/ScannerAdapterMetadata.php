<?php

namespace Gyroscops\Harbor\Api\Model;

class ScannerAdapterMetadata
{
    /**
     * 
     *
     * @var Scanner|null
     */
    protected $scanner;
    /**
     * 
     *
     * @var ScannerCapability[]|null
     */
    protected $capabilities;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $properties;
    /**
     * 
     *
     * @return Scanner|null
     */
    public function getScanner() : ?Scanner
    {
        return $this->scanner;
    }
    /**
     * 
     *
     * @param Scanner|null $scanner
     *
     * @return self
     */
    public function setScanner(?Scanner $scanner) : self
    {
        $this->scanner = $scanner;
        return $this;
    }
    /**
     * 
     *
     * @return ScannerCapability[]|null
     */
    public function getCapabilities() : ?array
    {
        return $this->capabilities;
    }
    /**
     * 
     *
     * @param ScannerCapability[]|null $capabilities
     *
     * @return self
     */
    public function setCapabilities(?array $capabilities) : self
    {
        $this->capabilities = $capabilities;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getProperties() : ?iterable
    {
        return $this->properties;
    }
    /**
     * 
     *
     * @param string[]|null $properties
     *
     * @return self
     */
    public function setProperties(?iterable $properties) : self
    {
        $this->properties = $properties;
        return $this;
    }
}