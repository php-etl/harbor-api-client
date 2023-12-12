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
     * @var mixed|null
     */
    protected $value;
    /**
     * matches or excludes the result
     *
     * @var string|null
     */
    protected $decoration;
    /**
     * The replication policy filter type.
     *
     * @return string|null
     */
    public function getType() : ?string
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
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The value of replication policy filter.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * The value of replication policy filter.
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * matches or excludes the result
     *
     * @return string|null
     */
    public function getDecoration() : ?string
    {
        return $this->decoration;
    }
    /**
     * matches or excludes the result
     *
     * @param string|null $decoration
     *
     * @return self
     */
    public function setDecoration(?string $decoration) : self
    {
        $this->decoration = $decoration;
        return $this;
    }
}