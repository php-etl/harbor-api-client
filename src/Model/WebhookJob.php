<?php

namespace Gyroscops\Harbor\Api\Model;

class WebhookJob
{
    /**
     * The webhook job ID.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The webhook policy ID.
     *
     * @var int|null
     */
    protected $policyId;
    /**
     * The webhook job event type.
     *
     * @var string|null
     */
    protected $eventType;
    /**
     * The webhook job notify type.
     *
     * @var string|null
     */
    protected $notifyType;
    /**
     * The webhook job status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The webhook job notify detailed data.
     *
     * @var string|null
     */
    protected $jobDetail;
    /**
     * The webhook job creation time.
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * The webhook job update time.
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * The webhook job ID.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The webhook job ID.
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
     * The webhook policy ID.
     *
     * @return int|null
     */
    public function getPolicyId() : ?int
    {
        return $this->policyId;
    }
    /**
     * The webhook policy ID.
     *
     * @param int|null $policyId
     *
     * @return self
     */
    public function setPolicyId(?int $policyId) : self
    {
        $this->policyId = $policyId;
        return $this;
    }
    /**
     * The webhook job event type.
     *
     * @return string|null
     */
    public function getEventType() : ?string
    {
        return $this->eventType;
    }
    /**
     * The webhook job event type.
     *
     * @param string|null $eventType
     *
     * @return self
     */
    public function setEventType(?string $eventType) : self
    {
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * The webhook job notify type.
     *
     * @return string|null
     */
    public function getNotifyType() : ?string
    {
        return $this->notifyType;
    }
    /**
     * The webhook job notify type.
     *
     * @param string|null $notifyType
     *
     * @return self
     */
    public function setNotifyType(?string $notifyType) : self
    {
        $this->notifyType = $notifyType;
        return $this;
    }
    /**
     * The webhook job status.
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The webhook job status.
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
     * The webhook job notify detailed data.
     *
     * @return string|null
     */
    public function getJobDetail() : ?string
    {
        return $this->jobDetail;
    }
    /**
     * The webhook job notify detailed data.
     *
     * @param string|null $jobDetail
     *
     * @return self
     */
    public function setJobDetail(?string $jobDetail) : self
    {
        $this->jobDetail = $jobDetail;
        return $this;
    }
    /**
     * The webhook job creation time.
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * The webhook job creation time.
     *
     * @param \DateTime|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?\DateTime $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * The webhook job update time.
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * The webhook job update time.
     *
     * @param \DateTime|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?\DateTime $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
}