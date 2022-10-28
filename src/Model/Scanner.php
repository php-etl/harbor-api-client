<?php

namespace Gyroscops\Harbor\Api\Model;

class Scanner
{
    /**
     * Version of the scanner adapter
     *
     * @var string|null
     */
    protected $version;
    /**
     * Name of the scanner provider
     *
     * @var string|null
     */
    protected $vendor;
    /**
     * Name of the scanner
     *
     * @var string|null
     */
    protected $name;
    /**
     * Version of the scanner adapter
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Version of the scanner adapter
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Name of the scanner provider
     *
     * @return string|null
     */
    public function getVendor(): ?string
    {
        return $this->vendor;
    }
    /**
     * Name of the scanner provider
     *
     * @param string|null $vendor
     *
     * @return self
     */
    public function setVendor(?string $vendor): self
    {
        $this->vendor = $vendor;
        return $this;
    }
    /**
     * Name of the scanner
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Name of the scanner
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
}
