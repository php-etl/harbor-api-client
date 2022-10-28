<?php

namespace Gyroscops\Harbor\Api\Model;

class Quota
{
    /**
     * the update time of the quota
     *
     * @var string|null
     */
    protected $updateTime;
    /**
     *
     *
     * @var int[]|null
     */
    protected $used;
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
     * the creation time of the quota
     *
     * @var string|null
     */
    protected $creationTime;
    /**
     * ID of the quota
     *
     * @var int|null
     */
    protected $id;
    /**
     * the update time of the quota
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }
    /**
     * the update time of the quota
     *
     * @param string|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     *
     *
     * @return int[]|null
     */
    public function getUsed(): ?iterable
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
    public function setUsed(?iterable $used): self
    {
        $this->used = $used;
        return $this;
    }
    /**
     *
     *
     * @return mixed[]|null
     */
    public function getRef(): ?iterable
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
    public function setRef(?iterable $ref): self
    {
        $this->ref = $ref;
        return $this;
    }
    /**
     *
     *
     * @return int[]|null
     */
    public function getHard(): ?iterable
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
    public function setHard(?iterable $hard): self
    {
        $this->hard = $hard;
        return $this;
    }
    /**
     * the creation time of the quota
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * the creation time of the quota
     *
     * @param string|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?string $creationTime): self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * ID of the quota
     *
     * @return int|null
     */
    public function getId(): ?int
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
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
