<?php

namespace Gyroscops\Harbor\Api\Model;

class _Namespace
{
    /**
     * The name of namespace
     *
     * @var string
     */
    protected $name;
    /**
     * The metadata of namespace
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * The name of namespace
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of namespace
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The metadata of namespace
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
    /**
     * The metadata of namespace
     *
     * @param mixed $metadata
     *
     * @return self
     */
    public function setMetadata($metadata) : self
    {
        $this->metadata = $metadata;
        return $this;
    }
}