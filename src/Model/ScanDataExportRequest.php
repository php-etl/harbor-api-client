<?php

namespace Gyroscops\Harbor\Api\Model;

class ScanDataExportRequest
{
    /**
     * Name of the scan data export job
     *
     * @var string|null
     */
    protected $jobName;
    /**
     * A list of one or more projects for which to export the scan data, currently only one project is supported due to performance concerns, but define as array for extension in the future.
     *
     * @var int[]|null
     */
    protected $projects;
    /**
     * A list of one or more labels for which to export the scan data, defaults to all if empty
     *
     * @var int[]|null
     */
    protected $labels;
    /**
     * A list of repositories for which to export the scan data, defaults to all if empty
     *
     * @var string|null
     */
    protected $repositories;
    /**
     * CVE-IDs for which to export data. Multiple CVE-IDs can be specified by separating using ',' and enclosed between '{}'. Defaults to all if empty
     *
     * @var string|null
     */
    protected $cveIds;
    /**
     * A list of tags enclosed within '{}'. Defaults to all if empty
     *
     * @var string|null
     */
    protected $tags;
    /**
     * Name of the scan data export job
     *
     * @return string|null
     */
    public function getJobName() : ?string
    {
        return $this->jobName;
    }
    /**
     * Name of the scan data export job
     *
     * @param string|null $jobName
     *
     * @return self
     */
    public function setJobName(?string $jobName) : self
    {
        $this->jobName = $jobName;
        return $this;
    }
    /**
     * A list of one or more projects for which to export the scan data, currently only one project is supported due to performance concerns, but define as array for extension in the future.
     *
     * @return int[]|null
     */
    public function getProjects() : ?array
    {
        return $this->projects;
    }
    /**
     * A list of one or more projects for which to export the scan data, currently only one project is supported due to performance concerns, but define as array for extension in the future.
     *
     * @param int[]|null $projects
     *
     * @return self
     */
    public function setProjects(?array $projects) : self
    {
        $this->projects = $projects;
        return $this;
    }
    /**
     * A list of one or more labels for which to export the scan data, defaults to all if empty
     *
     * @return int[]|null
     */
    public function getLabels() : ?array
    {
        return $this->labels;
    }
    /**
     * A list of one or more labels for which to export the scan data, defaults to all if empty
     *
     * @param int[]|null $labels
     *
     * @return self
     */
    public function setLabels(?array $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * A list of repositories for which to export the scan data, defaults to all if empty
     *
     * @return string|null
     */
    public function getRepositories() : ?string
    {
        return $this->repositories;
    }
    /**
     * A list of repositories for which to export the scan data, defaults to all if empty
     *
     * @param string|null $repositories
     *
     * @return self
     */
    public function setRepositories(?string $repositories) : self
    {
        $this->repositories = $repositories;
        return $this;
    }
    /**
     * CVE-IDs for which to export data. Multiple CVE-IDs can be specified by separating using ',' and enclosed between '{}'. Defaults to all if empty
     *
     * @return string|null
     */
    public function getCveIds() : ?string
    {
        return $this->cveIds;
    }
    /**
     * CVE-IDs for which to export data. Multiple CVE-IDs can be specified by separating using ',' and enclosed between '{}'. Defaults to all if empty
     *
     * @param string|null $cveIds
     *
     * @return self
     */
    public function setCveIds(?string $cveIds) : self
    {
        $this->cveIds = $cveIds;
        return $this;
    }
    /**
     * A list of tags enclosed within '{}'. Defaults to all if empty
     *
     * @return string|null
     */
    public function getTags() : ?string
    {
        return $this->tags;
    }
    /**
     * A list of tags enclosed within '{}'. Defaults to all if empty
     *
     * @param string|null $tags
     *
     * @return self
     */
    public function setTags(?string $tags) : self
    {
        $this->tags = $tags;
        return $this;
    }
}