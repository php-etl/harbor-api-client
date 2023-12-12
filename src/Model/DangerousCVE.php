<?php

namespace Gyroscops\Harbor\Api\Model;

class DangerousCVE
{
    /**
     * the cve id
     *
     * @var string|null
     */
    protected $cveId;
    /**
     * the severity of the CVE
     *
     * @var string|null
     */
    protected $severity;
    /**
     * the cvss score v3
     *
     * @var float|null
     */
    protected $cvssScoreV3;
    /**
     * the description of the CVE
     *
     * @var string|null
     */
    protected $desc;
    /**
     * the package of the CVE
     *
     * @var string|null
     */
    protected $package;
    /**
     * the version of the package
     *
     * @var string|null
     */
    protected $version;
    /**
     * the cve id
     *
     * @return string|null
     */
    public function getCveId() : ?string
    {
        return $this->cveId;
    }
    /**
     * the cve id
     *
     * @param string|null $cveId
     *
     * @return self
     */
    public function setCveId(?string $cveId) : self
    {
        $this->cveId = $cveId;
        return $this;
    }
    /**
     * the severity of the CVE
     *
     * @return string|null
     */
    public function getSeverity() : ?string
    {
        return $this->severity;
    }
    /**
     * the severity of the CVE
     *
     * @param string|null $severity
     *
     * @return self
     */
    public function setSeverity(?string $severity) : self
    {
        $this->severity = $severity;
        return $this;
    }
    /**
     * the cvss score v3
     *
     * @return float|null
     */
    public function getCvssScoreV3() : ?float
    {
        return $this->cvssScoreV3;
    }
    /**
     * the cvss score v3
     *
     * @param float|null $cvssScoreV3
     *
     * @return self
     */
    public function setCvssScoreV3(?float $cvssScoreV3) : self
    {
        $this->cvssScoreV3 = $cvssScoreV3;
        return $this;
    }
    /**
     * the description of the CVE
     *
     * @return string|null
     */
    public function getDesc() : ?string
    {
        return $this->desc;
    }
    /**
     * the description of the CVE
     *
     * @param string|null $desc
     *
     * @return self
     */
    public function setDesc(?string $desc) : self
    {
        $this->desc = $desc;
        return $this;
    }
    /**
     * the package of the CVE
     *
     * @return string|null
     */
    public function getPackage() : ?string
    {
        return $this->package;
    }
    /**
     * the package of the CVE
     *
     * @param string|null $package
     *
     * @return self
     */
    public function setPackage(?string $package) : self
    {
        $this->package = $package;
        return $this;
    }
    /**
     * the version of the package
     *
     * @return string|null
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * the version of the package
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version) : self
    {
        $this->version = $version;
        return $this;
    }
}