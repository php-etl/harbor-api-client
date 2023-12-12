<?php

namespace Gyroscops\Harbor\Api\Model;

class Platform
{
    /**
     * The architecture that the artifact applys to
     *
     * @var string|null
     */
    protected $architecture;
    /**
     * The OS that the artifact applys to
     *
     * @var string|null
     */
    protected $os;
    /**
     * The version of the OS that the artifact applys to
     *
     * @var string|null
     */
    protected $osVersion;
    /**
     * The features of the OS that the artifact applys to
     *
     * @var string[]|null
     */
    protected $osFeatures;
    /**
     * The variant of the CPU
     *
     * @var string|null
     */
    protected $variant;
    /**
     * The architecture that the artifact applys to
     *
     * @return string|null
     */
    public function getArchitecture() : ?string
    {
        return $this->architecture;
    }
    /**
     * The architecture that the artifact applys to
     *
     * @param string|null $architecture
     *
     * @return self
     */
    public function setArchitecture(?string $architecture) : self
    {
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * The OS that the artifact applys to
     *
     * @return string|null
     */
    public function getOs() : ?string
    {
        return $this->os;
    }
    /**
     * The OS that the artifact applys to
     *
     * @param string|null $os
     *
     * @return self
     */
    public function setOs(?string $os) : self
    {
        $this->os = $os;
        return $this;
    }
    /**
     * The version of the OS that the artifact applys to
     *
     * @return string|null
     */
    public function getOsVersion() : ?string
    {
        return $this->osVersion;
    }
    /**
     * The version of the OS that the artifact applys to
     *
     * @param string|null $osVersion
     *
     * @return self
     */
    public function setOsVersion(?string $osVersion) : self
    {
        $this->osVersion = $osVersion;
        return $this;
    }
    /**
     * The features of the OS that the artifact applys to
     *
     * @return string[]|null
     */
    public function getOsFeatures() : ?array
    {
        return $this->osFeatures;
    }
    /**
     * The features of the OS that the artifact applys to
     *
     * @param string[]|null $osFeatures
     *
     * @return self
     */
    public function setOsFeatures(?array $osFeatures) : self
    {
        $this->osFeatures = $osFeatures;
        return $this;
    }
    /**
     * The variant of the CPU
     *
     * @return string|null
     */
    public function getVariant() : ?string
    {
        return $this->variant;
    }
    /**
     * The variant of the CPU
     *
     * @param string|null $variant
     *
     * @return self
     */
    public function setVariant(?string $variant) : self
    {
        $this->variant = $variant;
        return $this;
    }
}