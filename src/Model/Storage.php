<?php

namespace Gyroscops\Harbor\Api\Model;

class Storage
{
    /**
     * Total volume size.
     *
     * @var int|null
     */
    protected $total;
    /**
     * Free volume size.
     *
     * @var int|null
     */
    protected $free;
    /**
     * Total volume size.
     *
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }
    /**
     * Total volume size.
     *
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * Free volume size.
     *
     * @return int|null
     */
    public function getFree(): ?int
    {
        return $this->free;
    }
    /**
     * Free volume size.
     *
     * @param int|null $free
     *
     * @return self
     */
    public function setFree(?int $free): self
    {
        $this->free = $free;
        return $this;
    }
}
