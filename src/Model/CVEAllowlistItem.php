<?php

namespace Gyroscops\Harbor\Api\Model;

class CVEAllowlistItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ID of the CVE, such as "CVE-2019-10164"
     *
     * @var string|null
     */
    protected $cveId;
    /**
     * The ID of the CVE, such as "CVE-2019-10164"
     *
     * @return string|null
     */
    public function getCveId() : ?string
    {
        return $this->cveId;
    }
    /**
     * The ID of the CVE, such as "CVE-2019-10164"
     *
     * @param string|null $cveId
     *
     * @return self
     */
    public function setCveId(?string $cveId) : self
    {
        $this->initialized['cveId'] = true;
        $this->cveId = $cveId;
        return $this;
    }
}