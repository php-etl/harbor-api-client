<?php

namespace Harbor\Api\Model;

class Quota
{
    /**
     * the update time of the quota
     *
     * @var string
     */
    protected $updateTime;
    /**
     * 
     *
     * @var int[]
     */
    protected $used;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $ref;
    /**
     * 
     *
     * @var int[]
     */
    protected $hard;
    /**
     * the creation time of the quota
     *
     * @var string
     */
    protected $creationTime;
    /**
     * ID of the quota
     *
     * @var int
     */
    protected $id;
    /**
     * the update time of the quota
     *
     * @return string
     */
    public function getUpdateTime() : string
    {
        return $this->updateTime;
    }
    /**
     * the update time of the quota
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
     * 
     *
     * @return int[]
     */
    public function getUsed() : iterable
    {
        return $this->used;
    }
    /**
     * 
     *
     * @param int[] $used
     *
     * @return self
     */
    public function setUsed(iterable $used) : self
    {
        $this->used = $used;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getRef() : iterable
    {
        return $this->ref;
    }
    /**
     * 
     *
     * @param mixed[] $ref
     *
     * @return self
     */
    public function setRef(iterable $ref) : self
    {
        $this->ref = $ref;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getHard() : iterable
    {
        return $this->hard;
    }
    /**
     * 
     *
     * @param int[] $hard
     *
     * @return self
     */
    public function setHard(iterable $hard) : self
    {
        $this->hard = $hard;
        return $this;
    }
    /**
     * the creation time of the quota
     *
     * @return string
     */
    public function getCreationTime() : string
    {
        return $this->creationTime;
    }
    /**
     * the creation time of the quota
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
     * ID of the quota
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * ID of the quota
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
}