<?php

namespace Gyroscops\Harbor\Api\Model;

class Quota
{
    /**
     * ID of the quota
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $ref;
    /**
     * 
     *
     * @var int[]|null
     */
    protected $hard;
    /**
     * 
     *
     * @var int[]|null
     */
    protected $used;
    /**
     * the creation time of the quota
     *
     * @var \DateTime|null
     */
    protected $creationTime;
    /**
     * the update time of the quota
     *
     * @var \DateTime|null
     */
    protected $updateTime;
    /**
     * ID of the quota
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * ID of the quota
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
     * 
     *
     * @return mixed[]|null
     */
    public function getRef() : ?iterable
    {
        return $this->ref;
    }
    /**
     * 
     *
     * @param mixed[]|null $ref
     *
     * @return self
     */
    public function setRef(?iterable $ref) : self
    {
        $this->ref = $ref;
        return $this;
    }
    /**
     * 
     *
     * @return int[]|null
     */
    public function getHard() : ?iterable
    {
        return $this->hard;
    }
    /**
     * 
     *
     * @param int[]|null $hard
     *
     * @return self
     */
    public function setHard(?iterable $hard) : self
    {
        $this->hard = $hard;
        return $this;
    }
    /**
     * 
     *
     * @return int[]|null
     */
    public function getUsed() : ?iterable
    {
        return $this->used;
    }
    /**
     * 
     *
     * @param int[]|null $used
     *
     * @return self
     */
    public function setUsed(?iterable $used) : self
    {
        $this->used = $used;
        return $this;
    }
    /**
     * the creation time of the quota
     *
     * @return \DateTime|null
     */
    public function getCreationTime() : ?\DateTime
    {
        return $this->creationTime;
    }
    /**
     * the creation time of the quota
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
     * the update time of the quota
     *
     * @return \DateTime|null
     */
    public function getUpdateTime() : ?\DateTime
    {
        return $this->updateTime;
    }
    /**
     * the update time of the quota
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