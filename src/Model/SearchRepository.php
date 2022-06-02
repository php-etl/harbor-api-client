<?php

namespace Harbor\Api\Model;

class SearchRepository
{
    /**
     * The name of the repository
     *
     * @var string
     */
    protected $repositoryName;
    /**
     * The name of the project that the repository belongs to
     *
     * @var string
     */
    protected $projectName;
    /**
     * The count of artifacts in the repository
     *
     * @var int
     */
    protected $artifactCount;
    /**
     * The flag to indicate the publicity of the project that the repository belongs to (1 is public, 0 is not)
     *
     * @var bool
     */
    protected $projectPublic;
    /**
     * The ID of the project that the repository belongs to
     *
     * @var int
     */
    protected $projectId;
    /**
     * The count how many times the repository is pulled
     *
     * @var int
     */
    protected $pullCount;
    /**
     * The name of the repository
     *
     * @return string
     */
    public function getRepositoryName() : string
    {
        return $this->repositoryName;
    }
    /**
     * The name of the repository
     *
     * @param string $repositoryName
     *
     * @return self
     */
    public function setRepositoryName(string $repositoryName) : self
    {
        $this->repositoryName = $repositoryName;
        return $this;
    }
    /**
     * The name of the project that the repository belongs to
     *
     * @return string
     */
    public function getProjectName() : string
    {
        return $this->projectName;
    }
    /**
     * The name of the project that the repository belongs to
     *
     * @param string $projectName
     *
     * @return self
     */
    public function setProjectName(string $projectName) : self
    {
        $this->projectName = $projectName;
        return $this;
    }
    /**
     * The count of artifacts in the repository
     *
     * @return int
     */
    public function getArtifactCount() : int
    {
        return $this->artifactCount;
    }
    /**
     * The count of artifacts in the repository
     *
     * @param int $artifactCount
     *
     * @return self
     */
    public function setArtifactCount(int $artifactCount) : self
    {
        $this->artifactCount = $artifactCount;
        return $this;
    }
    /**
     * The flag to indicate the publicity of the project that the repository belongs to (1 is public, 0 is not)
     *
     * @return bool
     */
    public function getProjectPublic() : bool
    {
        return $this->projectPublic;
    }
    /**
     * The flag to indicate the publicity of the project that the repository belongs to (1 is public, 0 is not)
     *
     * @param bool $projectPublic
     *
     * @return self
     */
    public function setProjectPublic(bool $projectPublic) : self
    {
        $this->projectPublic = $projectPublic;
        return $this;
    }
    /**
     * The ID of the project that the repository belongs to
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project that the repository belongs to
     *
     * @param int $projectId
     *
     * @return self
     */
    public function setProjectId(int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The count how many times the repository is pulled
     *
     * @return int
     */
    public function getPullCount() : int
    {
        return $this->pullCount;
    }
    /**
     * The count how many times the repository is pulled
     *
     * @param int $pullCount
     *
     * @return self
     */
    public function setPullCount(int $pullCount) : self
    {
        $this->pullCount = $pullCount;
        return $this;
    }
}