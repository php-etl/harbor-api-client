<?php

namespace Gyroscops\Harbor\Api\Model;

class RegistryEndpoint
{
    /**
     * The endpoint key
     *
     * @var string|null
     */
    protected $key;
    /**
     * The endpoint value
     *
     * @var string|null
     */
    protected $value;
    /**
     * The endpoint key
     *
     * @return string|null
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * The endpoint key
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * The endpoint value
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The endpoint value
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->value = $value;
        return $this;
    }
}