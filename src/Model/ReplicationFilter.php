<?php

namespace Harbor\Api\Model;

class ReplicationFilter
{
    /**
     * The replication policy filter type.
     *
     * @var string
     */
    protected $type;
    /**
     * The value of replication policy filter.
     *
     * @var string
     */
    protected $value;
    /**
     * The replication policy filter type.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The replication policy filter type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The value of replication policy filter.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The value of replication policy filter.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->value = $value;
        return $this;
    }
}