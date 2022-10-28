<?php

namespace Gyroscops\Harbor\Api\Model;

class ReplicationFilter
{
    /**
     * The replication policy filter type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The value of replication policy filter.
     *
     * @var string|null
     */
    protected $value;
    /**
     * The replication policy filter type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The replication policy filter type.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The value of replication policy filter.
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * The value of replication policy filter.
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
