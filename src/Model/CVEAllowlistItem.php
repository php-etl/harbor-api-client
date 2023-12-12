<?php

namespace Gyroscops\Harbor\Api\Model;

class CVEAllowlistItem
{
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
        $this->cveId = $cveId;
        return $this;
    }
}