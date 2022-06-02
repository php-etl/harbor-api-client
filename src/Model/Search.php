<?php

namespace Harbor\Api\Model;

class Search
{
    /**
     * Search results of the projects that matched the filter keywords.
     *
     * @var Project[]
     */
    protected $project;
    /**
     * Search results of the charts that macthed the filter keywords.
     *
     * @var SearchResult[]
     */
    protected $chart;
    /**
     * Search results of the repositories that matched the filter keywords.
     *
     * @var SearchRepository[]
     */
    protected $repository;
    /**
     * Search results of the projects that matched the filter keywords.
     *
     * @return Project[]
     */
    public function getProject() : array
    {
        return $this->project;
    }
    /**
     * Search results of the projects that matched the filter keywords.
     *
     * @param Project[] $project
     *
     * @return self
     */
    public function setProject(array $project) : self
    {
        $this->project = $project;
        return $this;
    }
    /**
     * Search results of the charts that macthed the filter keywords.
     *
     * @return SearchResult[]
     */
    public function getChart() : array
    {
        return $this->chart;
    }
    /**
     * Search results of the charts that macthed the filter keywords.
     *
     * @param SearchResult[] $chart
     *
     * @return self
     */
    public function setChart(array $chart) : self
    {
        $this->chart = $chart;
        return $this;
    }
    /**
     * Search results of the repositories that matched the filter keywords.
     *
     * @return SearchRepository[]
     */
    public function getRepository() : array
    {
        return $this->repository;
    }
    /**
     * Search results of the repositories that matched the filter keywords.
     *
     * @param SearchRepository[] $repository
     *
     * @return self
     */
    public function setRepository(array $repository) : self
    {
        $this->repository = $repository;
        return $this;
    }
}