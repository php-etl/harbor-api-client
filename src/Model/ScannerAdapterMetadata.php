<?php

namespace Gyroscops\Harbor\Api\Model;

class ScannerAdapterMetadata
{
    /**
     *
     *
     * @var Scanner|null
     */
    protected $name;
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
    public function getName(): ?Scanner
    {
        return $this->name;
    }
    /**
     *
     *
     * @param Scanner|null $name
     *
     * @return self
     */
    public function setName(?Scanner $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     *
     *
     * @return ScannerCapability[]|null
     */
    public function getCapabilities(): ?array
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
    public function setCapabilities(?array $capabilities): self
    {
        $this->capabilities = $capabilities;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getProperties(): ?iterable
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
    public function setProperties(?iterable $properties): self
    {
        $this->properties = $properties;
        return $this;
    }
}
