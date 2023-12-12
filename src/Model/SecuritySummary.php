<?php

namespace Gyroscops\Harbor\Api\Model;

class SecuritySummary
{
    /**
     * the count of critical vulnerabilities
     *
     * @var int|null
     */
    protected $criticalCnt;
    /**
     * the count of high vulnerabilities
     *
     * @var int|null
     */
    protected $highCnt;
    /**
     * the count of medium vulnerabilities
     *
     * @var int|null
     */
    protected $mediumCnt;
    /**
     * the count of low vulnerabilities
     *
     * @var int|null
     */
    protected $lowCnt;
    /**
     * the count of none vulnerabilities
     *
     * @var int|null
     */
    protected $noneCnt;
    /**
     * the count of unknown vulnerabilities
     *
     * @var int|null
     */
    protected $unknownCnt;
    /**
     * the count of total vulnerabilities
     *
     * @var int|null
     */
    protected $totalVuls;
    /**
     * the count of scanned artifacts
     *
     * @var int|null
     */
    protected $scannedCnt;
    /**
     * the total count of artifacts
     *
     * @var int|null
     */
    protected $totalArtifact;
    /**
     * the count of fixable vulnerabilities
     *
     * @var int|null
     */
    protected $fixableCnt;
    /**
     * the list of dangerous CVEs
     *
     * @var DangerousCVE[]|null
     */
    protected $dangerousCves;
    /**
     * the list of dangerous artifacts
     *
     * @var DangerousArtifact[]|null
     */
    protected $dangerousArtifacts;
    /**
     * the count of critical vulnerabilities
     *
     * @return int|null
     */
    public function getCriticalCnt() : ?int
    {
        return $this->criticalCnt;
    }
    /**
     * the count of critical vulnerabilities
     *
     * @param int|null $criticalCnt
     *
     * @return self
     */
    public function setCriticalCnt(?int $criticalCnt) : self
    {
        $this->criticalCnt = $criticalCnt;
        return $this;
    }
    /**
     * the count of high vulnerabilities
     *
     * @return int|null
     */
    public function getHighCnt() : ?int
    {
        return $this->highCnt;
    }
    /**
     * the count of high vulnerabilities
     *
     * @param int|null $highCnt
     *
     * @return self
     */
    public function setHighCnt(?int $highCnt) : self
    {
        $this->highCnt = $highCnt;
        return $this;
    }
    /**
     * the count of medium vulnerabilities
     *
     * @return int|null
     */
    public function getMediumCnt() : ?int
    {
        return $this->mediumCnt;
    }
    /**
     * the count of medium vulnerabilities
     *
     * @param int|null $mediumCnt
     *
     * @return self
     */
    public function setMediumCnt(?int $mediumCnt) : self
    {
        $this->mediumCnt = $mediumCnt;
        return $this;
    }
    /**
     * the count of low vulnerabilities
     *
     * @return int|null
     */
    public function getLowCnt() : ?int
    {
        return $this->lowCnt;
    }
    /**
     * the count of low vulnerabilities
     *
     * @param int|null $lowCnt
     *
     * @return self
     */
    public function setLowCnt(?int $lowCnt) : self
    {
        $this->lowCnt = $lowCnt;
        return $this;
    }
    /**
     * the count of none vulnerabilities
     *
     * @return int|null
     */
    public function getNoneCnt() : ?int
    {
        return $this->noneCnt;
    }
    /**
     * the count of none vulnerabilities
     *
     * @param int|null $noneCnt
     *
     * @return self
     */
    public function setNoneCnt(?int $noneCnt) : self
    {
        $this->noneCnt = $noneCnt;
        return $this;
    }
    /**
     * the count of unknown vulnerabilities
     *
     * @return int|null
     */
    public function getUnknownCnt() : ?int
    {
        return $this->unknownCnt;
    }
    /**
     * the count of unknown vulnerabilities
     *
     * @param int|null $unknownCnt
     *
     * @return self
     */
    public function setUnknownCnt(?int $unknownCnt) : self
    {
        $this->unknownCnt = $unknownCnt;
        return $this;
    }
    /**
     * the count of total vulnerabilities
     *
     * @return int|null
     */
    public function getTotalVuls() : ?int
    {
        return $this->totalVuls;
    }
    /**
     * the count of total vulnerabilities
     *
     * @param int|null $totalVuls
     *
     * @return self
     */
    public function setTotalVuls(?int $totalVuls) : self
    {
        $this->totalVuls = $totalVuls;
        return $this;
    }
    /**
     * the count of scanned artifacts
     *
     * @return int|null
     */
    public function getScannedCnt() : ?int
    {
        return $this->scannedCnt;
    }
    /**
     * the count of scanned artifacts
     *
     * @param int|null $scannedCnt
     *
     * @return self
     */
    public function setScannedCnt(?int $scannedCnt) : self
    {
        $this->scannedCnt = $scannedCnt;
        return $this;
    }
    /**
     * the total count of artifacts
     *
     * @return int|null
     */
    public function getTotalArtifact() : ?int
    {
        return $this->totalArtifact;
    }
    /**
     * the total count of artifacts
     *
     * @param int|null $totalArtifact
     *
     * @return self
     */
    public function setTotalArtifact(?int $totalArtifact) : self
    {
        $this->totalArtifact = $totalArtifact;
        return $this;
    }
    /**
     * the count of fixable vulnerabilities
     *
     * @return int|null
     */
    public function getFixableCnt() : ?int
    {
        return $this->fixableCnt;
    }
    /**
     * the count of fixable vulnerabilities
     *
     * @param int|null $fixableCnt
     *
     * @return self
     */
    public function setFixableCnt(?int $fixableCnt) : self
    {
        $this->fixableCnt = $fixableCnt;
        return $this;
    }
    /**
     * the list of dangerous CVEs
     *
     * @return DangerousCVE[]|null
     */
    public function getDangerousCves() : ?array
    {
        return $this->dangerousCves;
    }
    /**
     * the list of dangerous CVEs
     *
     * @param DangerousCVE[]|null $dangerousCves
     *
     * @return self
     */
    public function setDangerousCves(?array $dangerousCves) : self
    {
        $this->dangerousCves = $dangerousCves;
        return $this;
    }
    /**
     * the list of dangerous artifacts
     *
     * @return DangerousArtifact[]|null
     */
    public function getDangerousArtifacts() : ?array
    {
        return $this->dangerousArtifacts;
    }
    /**
     * the list of dangerous artifacts
     *
     * @param DangerousArtifact[]|null $dangerousArtifacts
     *
     * @return self
     */
    public function setDangerousArtifacts(?array $dangerousArtifacts) : self
    {
        $this->dangerousArtifacts = $dangerousArtifacts;
        return $this;
    }
}