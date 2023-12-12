<?php

namespace Gyroscops\Harbor\Api\Model;

class ScheduleTask
{
    /**
     * the id of the Schedule task
     *
     * @var int|null
     */
    protected $id;
    /**
     * the vendor type of the current schedule task
     *
     * @var string|null
     */
    protected $vendorType;
    /**
     * the vendor id of the current task
     *
     * @var int|null
     */
    protected $vendorId;
    /**
     * the cron of the current schedule task
     *
     * @var string|null
     */
    protected $cron;
    /**
     * the update time of the schedule task
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * the id of the Schedule task
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * the id of the Schedule task
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
     * the vendor type of the current schedule task
     *
     * @return string|null
     */
    public function getVendorType() : ?string
    {
        return $this->vendorType;
    }
    /**
     * the vendor type of the current schedule task
     *
     * @param string|null $vendorType
     *
     * @return self
     */
    public function setVendorType(?string $vendorType) : self
    {
        $this->vendorType = $vendorType;
        return $this;
    }
    /**
     * the vendor id of the current task
     *
     * @return int|null
     */
    public function getVendorId() : ?int
    {
        return $this->vendorId;
    }
    /**
     * the vendor id of the current task
     *
     * @param int|null $vendorId
     *
     * @return self
     */
    public function setVendorId(?int $vendorId) : self
    {
        $this->vendorId = $vendorId;
        return $this;
    }
    /**
     * the cron of the current schedule task
     *
     * @return string|null
     */
    public function getCron() : ?string
    {
        return $this->cron;
    }
    /**
     * the cron of the current schedule task
     *
     * @param string|null $cron
     *
     * @return self
     */
    public function setCron(?string $cron) : self
    {
        $this->cron = $cron;
        return $this;
    }
    /**
     * the update time of the schedule task
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * the update time of the schedule task
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