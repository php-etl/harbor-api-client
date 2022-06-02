<?php

namespace Harbor\Api\Model;

class WebhookJob
{
    /**
     * The webhook job status.
     *
     * @var string
     */
    protected $status;
    /**
     * The webhook job update time.
     *
     * @var string
     */
    protected $updateTime;
    /**
     * The webhook job event type.
     *
     * @var string
     */
    protected $eventType;
    /**
     * The webhook job creation time.
     *
     * @var string
     */
    protected $creationTime;
    /**
     * The webhook job notify detailed data.
     *
     * @var string
     */
    protected $jobDetail;
    /**
     * The webhook job ID.
     *
     * @var int
     */
    protected $id;
    /**
     * The webhook job notify type.
     *
     * @var string
     */
    protected $notifyType;
    /**
     * The webhook policy ID.
     *
     * @var int
     */
    protected $policyId;
    /**
     * The webhook job status.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The webhook job status.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The webhook job update time.
     *
     * @return string
     */
    public function getUpdateTime() : string
    {
        return $this->updateTime;
    }
    /**
     * The webhook job update time.
     *
     * @param string $updateTime
     *
     * @return self
     */
    public function setUpdateTime(string $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     * The webhook job event type.
     *
     * @return string
     */
    public function getEventType() : string
    {
        return $this->eventType;
    }
    /**
     * The webhook job event type.
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType) : self
    {
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * The webhook job creation time.
     *
     * @return string
     */
    public function getCreationTime() : string
    {
        return $this->creationTime;
    }
    /**
     * The webhook job creation time.
     *
     * @param string $creationTime
     *
     * @return self
     */
    public function setCreationTime(string $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The webhook job notify detailed data.
     *
     * @return string
     */
    public function getJobDetail() : string
    {
        return $this->jobDetail;
    }
    /**
     * The webhook job notify detailed data.
     *
     * @param string $jobDetail
     *
     * @return self
     */
    public function setJobDetail(string $jobDetail) : self
    {
        $this->jobDetail = $jobDetail;
        return $this;
    }
    /**
     * The webhook job ID.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The webhook job ID.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The webhook job notify type.
     *
     * @return string
     */
    public function getNotifyType() : string
    {
        return $this->notifyType;
    }
    /**
     * The webhook job notify type.
     *
     * @param string $notifyType
     *
     * @return self
     */
    public function setNotifyType(string $notifyType) : self
    {
        $this->notifyType = $notifyType;
        return $this;
    }
    /**
     * The webhook policy ID.
     *
     * @return int
     */
    public function getPolicyId() : int
    {
        return $this->policyId;
    }
    /**
     * The webhook policy ID.
     *
     * @param int $policyId
     *
     * @return self
     */
    public function setPolicyId(int $policyId) : self
    {
        $this->policyId = $policyId;
        return $this;
    }
}