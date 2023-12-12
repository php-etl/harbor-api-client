<?php

namespace Gyroscops\Harbor\Api\Model;

class DangerousArtifact
{
    /**
     * the project id of the artifact
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * the repository name of the artifact
     *
     * @var string|null
     */
    protected $repositoryName;
    /**
     * the digest of the artifact
     *
     * @var string|null
     */
    protected $digest;
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
     * the project id of the artifact
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * the project id of the artifact
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * the repository name of the artifact
     *
     * @return string|null
     */
    public function getRepositoryName() : ?string
    {
        return $this->repositoryName;
    }
    /**
     * the repository name of the artifact
     *
     * @param string|null $repositoryName
     *
     * @return self
     */
    public function setRepositoryName(?string $repositoryName) : self
    {
        $this->repositoryName = $repositoryName;
        return $this;
    }
    /**
     * the digest of the artifact
     *
     * @return string|null
     */
    public function getDigest() : ?string
    {
        return $this->digest;
    }
    /**
     * the digest of the artifact
     *
     * @param string|null $digest
     *
     * @return self
     */
    public function setDigest(?string $digest) : self
    {
        $this->digest = $digest;
        return $this;
    }
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
}