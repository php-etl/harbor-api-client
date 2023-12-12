<?php

namespace Gyroscops\Harbor\Api\Model;

class ScanDataExportExecution
{
    /**
     * The ID of the execution
     *
     * @var int|null
     */
    protected $id;
    /**
     * The ID if the user triggering the export job
     *
     * @var int|null
     */
    protected $userId;
    /**
     * The status of the execution
     *
     * @var string|null
     */
    protected $status;
    /**
     * The trigger mode
     *
     * @var string|null
     */
    protected $trigger;
    /**
     * The start time
     *
     * @var \DateTime|null
     */
    protected $startTime;
    /**
     * The end time
     *
     * @var \DateTime|null
     */
    protected $endTime;
    /**
     * The status text
     *
     * @var string|null
     */
    protected $statusText;
    /**
     * The name of the user triggering the job
     *
     * @var string|null
     */
    protected $userName;
    /**
     * Indicates whether the export artifact is present in registry
     *
     * @var bool|null
     */
    protected $filePresent;
    /**
     * The ID of the execution
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The ID of the execution
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The ID if the user triggering the export job
     *
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * The ID if the user triggering the export job
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * The status of the execution
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The status of the execution
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The trigger mode
     *
     * @return string|null
     */
    public function getTrigger() : ?string
    {
        return $this->trigger;
    }
    /**
     * The trigger mode
     *
     * @param string|null $trigger
     *
     * @return self
     */
    public function setTrigger(?string $trigger) : self
    {
        $this->trigger = $trigger;
        return $this;
    }
    /**
     * The start time
     *
     * @return \DateTime|null
     */
    public function getStartTime() : ?\DateTime
    {
        return $this->startTime;
    }
    /**
     * The start time
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
     * The end time
     *
     * @return \DateTime|null
     */
    public function getEndTime() : ?\DateTime
    {
        return $this->endTime;
    }
    /**
     * The end time
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
     * The status text
     *
     * @return string|null
     */
    public function getStatusText() : ?string
    {
        return $this->statusText;
    }
    /**
     * The status text
     *
     * @param string|null $statusText
     *
     * @return self
     */
    public function setStatusText(?string $statusText) : self
    {
        $this->statusText = $statusText;
        return $this;
    }
    /**
     * The name of the user triggering the job
     *
     * @return string|null
     */
    public function getUserName() : ?string
    {
        return $this->userName;
    }
    /**
     * The name of the user triggering the job
     *
     * @param string|null $userName
     *
     * @return self
     */
    public function setUserName(?string $userName) : self
    {
        $this->userName = $userName;
        return $this;
    }
    /**
     * Indicates whether the export artifact is present in registry
     *
     * @return bool|null
     */
    public function getFilePresent() : ?bool
    {
        return $this->filePresent;
    }
    /**
     * Indicates whether the export artifact is present in registry
     *
     * @param bool|null $filePresent
     *
     * @return self
     */
    public function setFilePresent(?bool $filePresent) : self
    {
        $this->filePresent = $filePresent;
        return $this;
    }
}