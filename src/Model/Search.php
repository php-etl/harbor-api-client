<?php

namespace Gyroscops\Harbor\Api\Model;

class Search
{
    /**
     * Search results of the projects that matched the filter keywords.
     *
     * @var Project[]|null
     */
    protected $project;
    /**
     * Search results of the charts that macthed the filter keywords.
     *
     * @var SearchResult[]|null
     */
    protected $chart;
    /**
     * Search results of the repositories that matched the filter keywords.
     *
     * @var SearchRepository[]|null
     */
    protected $repository;
    /**
     * Search results of the projects that matched the filter keywords.
     *
     * @return Project[]|null
     */
    public function getProject(): ?array
    {
        return $this->project;
    }
    /**
     * Search results of the projects that matched the filter keywords.
     *
     * @param Project[]|null $project
     *
     * @return self
     */
    public function setProject(?array $project): self
    {
        $this->project = $project;
        return $this;
    }
    /**
     * Search results of the charts that macthed the filter keywords.
     *
     * @return SearchResult[]|null
     */
    public function getChart(): ?array
    {
        return $this->chart;
    }
    /**
     * Search results of the charts that macthed the filter keywords.
     *
     * @param SearchResult[]|null $chart
     *
     * @return self
     */
    public function setChart(?array $chart): self
    {
        $this->chart = $chart;
        return $this;
    }
    /**
     * Search results of the repositories that matched the filter keywords.
     *
     * @return SearchRepository[]|null
     */
    public function getRepository(): ?array
    {
        return $this->repository;
    }
    /**
     * Search results of the repositories that matched the filter keywords.
     *
     * @param SearchRepository[]|null $repository
     *
     * @return self
     */
    public function setRepository(?array $repository): self
    {
        $this->repository = $repository;
        return $this;
    }
}
