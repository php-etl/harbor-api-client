<?php

namespace Harbor\Api\Model;

class CVEWhitelistItem
{
    /**
     * The ID of the CVE, such as "CVE-2019-10164"
     *
     * @var string
     */
    protected $cveId;
    /**
     * The ID of the CVE, such as "CVE-2019-10164"
     *
     * @return string
     */
    public function getCveId() : string
    {
        return $this->cveId;
    }
    /**
     * The ID of the CVE, such as "CVE-2019-10164"
     *
     * @param string $cveId
     *
     * @return self
     */
    public function setCveId(string $cveId) : self
    {
        $this->cveId = $cveId;
        return $this;
    }
}