<?php

namespace Harbor\Api\Model;

class Scanner
{
    /**
     * Version of the scanner adapter
     *
     * @var string
     */
    protected $version;
    /**
     * Name of the scanner provider
     *
     * @var string
     */
    protected $vendor;
    /**
     * Name of the scanner
     *
     * @var string
     */
    protected $name;
    /**
     * Version of the scanner adapter
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * Version of the scanner adapter
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Name of the scanner provider
     *
     * @return string
     */
    public function getVendor() : string
    {
        return $this->vendor;
    }
    /**
     * Name of the scanner provider
     *
     * @param string $vendor
     *
     * @return self
     */
    public function setVendor(string $vendor) : self
    {
        $this->vendor = $vendor;
        return $this;
    }
    /**
     * Name of the scanner
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the scanner
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}