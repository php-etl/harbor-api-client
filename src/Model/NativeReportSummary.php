<?php

namespace Gyroscops\Harbor\Api\Model;

class NativeReportSummary
{
    /**
     * id of the native scan report
     *
     * @var string|null
     */
    protected $reportId;
    /**
     * The status of the report generating process
     *
     * @var string|null
     */
    protected $scanStatus;
    /**
     * The overall severity
     *
     * @var string|null
     */
    protected $severity;
    /**
     * The seconds spent for generating the report
     *
     * @var int|null
     */
    protected $duration;
    /**
     * VulnerabilitySummary contains the total number of the foun d vulnerabilities number and numbers of each severity level.
     *
     * @var VulnerabilitySummary|null
     */
    protected $summary;
    /**
     * The start time of the scan process that generating report
     *
     * @var \DateTime|null
     */
    protected $startTime;
    /**
     * The end time of the scan process that generating report
     *
     * @var \DateTime|null
     */
    protected $endTime;
    /**
     * The complete percent of the scanning which value is between 0 and 100
     *
     * @var int|null
     */
    protected $completePercent;
    /**
     * 
     *
     * @var Scanner|null
     */
    protected $scanner;
    /**
     * id of the native scan report
     *
     * @return string|null
     */
    public function getReportId() : ?string
    {
        return $this->reportId;
    }
    /**
     * id of the native scan report
     *
     * @param string|null $reportId
     *
     * @return self
     */
    public function setReportId(?string $reportId) : self
    {
        $this->reportId = $reportId;
        return $this;
    }
    /**
     * The status of the report generating process
     *
     * @return string|null
     */
    public function getScanStatus() : ?string
    {
        return $this->scanStatus;
    }
    /**
     * The status of the report generating process
     *
     * @param string|null $scanStatus
     *
     * @return self
     */
    public function setScanStatus(?string $scanStatus) : self
    {
        $this->scanStatus = $scanStatus;
        return $this;
    }
    /**
     * The overall severity
     *
     * @return string|null
     */
    public function getSeverity() : ?string
    {
        return $this->severity;
    }
    /**
     * The overall severity
     *
     * @param string|null $severity
     *
     * @return self
     */
    public function setSeverity(?string $severity) : self
    {
        $this->severity = $severity;
        return $this;
    }
    /**
     * The seconds spent for generating the report
     *
     * @return int|null
     */
    public function getDuration() : ?int
    {
        return $this->duration;
    }
    /**
     * The seconds spent for generating the report
     *
     * @param int|null $duration
     *
     * @return self
     */
    public function setDuration(?int $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     * VulnerabilitySummary contains the total number of the foun d vulnerabilities number and numbers of each severity level.
     *
     * @return VulnerabilitySummary|null
     */
    public function getSummary() : ?VulnerabilitySummary
    {
        return $this->summary;
    }
    /**
     * VulnerabilitySummary contains the total number of the foun d vulnerabilities number and numbers of each severity level.
     *
     * @param VulnerabilitySummary|null $summary
     *
     * @return self
     */
    public function setSummary(?VulnerabilitySummary $summary) : self
    {
        $this->summary = $summary;
        return $this;
    }
    /**
     * The start time of the scan process that generating report
     *
     * @return \DateTime|null
     */
    public function getStartTime() : ?\DateTime
    {
        return $this->startTime;
    }
    /**
     * The start time of the scan process that generating report
     *
     * @param \DateTime|null $startTime
     *
     * @return self
     */
    public function setStartTime(?\DateTime $startTime) : self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * The end time of the scan process that generating report
     *
     * @return \DateTime|null
     */
    public function getEndTime() : ?\DateTime
    {
        return $this->endTime;
    }
    /**
     * The end time of the scan process that generating report
     *
     * @param \DateTime|null $endTime
     *
     * @return self
     */
    public function setEndTime(?\DateTime $endTime) : self
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * The complete percent of the scanning which value is between 0 and 100
     *
     * @return int|null
     */
    public function getCompletePercent() : ?int
    {
        return $this->completePercent;
    }
    /**
     * The complete percent of the scanning which value is between 0 and 100
     *
     * @param int|null $completePercent
     *
     * @return self
     */
    public function setCompletePercent(?int $completePercent) : self
    {
        $this->completePercent = $completePercent;
        return $this;
    }
    /**
     * 
     *
     * @return Scanner|null
     */
    public function getScanner() : ?Scanner
    {
        return $this->scanner;
    }
    /**
     * 
     *
     * @param Scanner|null $scanner
     *
     * @return self
     */
    public function setScanner(?Scanner $scanner) : self
    {
        $this->scanner = $scanner;
        return $this;
    }
}