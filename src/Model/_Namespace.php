<?php

namespace Gyroscops\Harbor\Api\Model;

class _Namespace
{
    /**
     * The name of namespace
     *
     * @var string|null
     */
    protected $name;
    /**
     * The metadata of namespace
     *
     * @var mixed|null
     */
    protected $metadata;
    /**
     * The name of namespace
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The name of namespace
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
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
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;
        return $this;
    }
}
