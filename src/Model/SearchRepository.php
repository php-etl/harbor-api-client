<?php

namespace Gyroscops\Harbor\Api\Model;

class SearchRepository
{
    /**
     * The name of the repository
     *
     * @var string|null
     */
    protected $repositoryName;
    /**
     * The name of the project that the repository belongs to
     *
     * @var string|null
     */
    protected $projectName;
    /**
     * The count of artifacts in the repository
     *
     * @var int|null
     */
    protected $artifactCount;
    /**
     * The flag to indicate the publicity of the project that the repository belongs to (1 is public, 0 is not)
     *
     * @var bool|null
     */
    protected $projectPublic;
    /**
     * The ID of the project that the repository belongs to
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The count how many times the repository is pulled
     *
     * @var int|null
     */
    protected $pullCount;
    /**
     * The name of the repository
     *
     * @return string|null
     */
    public function getRepositoryName(): ?string
    {
        return $this->repositoryName;
    }
    /**
     * The name of the repository
     *
     * @param string|null $repositoryName
     *
     * @return self
     */
    public function setRepositoryName(?string $repositoryName): self
    {
        $this->repositoryName = $repositoryName;
        return $this;
    }
    /**
     * The name of the project that the repository belongs to
     *
     * @return string|null
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }
    /**
     * The name of the project that the repository belongs to
     *
     * @param string|null $projectName
     *
     * @return self
     */
    public function setProjectName(?string $projectName): self
    {
        $this->projectName = $projectName;
        return $this;
    }
    /**
     * The count of artifacts in the repository
     *
     * @return int|null
     */
    public function getArtifactCount(): ?int
    {
        return $this->artifactCount;
    }
    /**
     * The count of artifacts in the repository
     *
     * @param int|null $artifactCount
     *
     * @return self
     */
    public function setArtifactCount(?int $artifactCount): self
    {
        $this->artifactCount = $artifactCount;
        return $this;
    }
    /**
     * The flag to indicate the publicity of the project that the repository belongs to (1 is public, 0 is not)
     *
     * @return bool|null
     */
    public function getProjectPublic(): ?bool
    {
        return $this->projectPublic;
    }
    /**
     * The flag to indicate the publicity of the project that the repository belongs to (1 is public, 0 is not)
     *
     * @param bool|null $projectPublic
     *
     * @return self
     */
    public function setProjectPublic(?bool $projectPublic): self
    {
        $this->projectPublic = $projectPublic;
        return $this;
    }
    /**
     * The ID of the project that the repository belongs to
     *
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project that the repository belongs to
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The count how many times the repository is pulled
     *
     * @return int|null
     */
    public function getPullCount(): ?int
    {
        return $this->pullCount;
    }
    /**
     * The count how many times the repository is pulled
     *
     * @param int|null $pullCount
     *
     * @return self
     */
    public function setPullCount(?int $pullCount): self
    {
        $this->pullCount = $pullCount;
        return $this;
    }
}
