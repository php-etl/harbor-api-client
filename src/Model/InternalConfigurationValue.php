<?php

namespace Gyroscops\Harbor\Api\Model;

class InternalConfigurationValue
{
    /**
     * The value of current config item
     *
     * @var mixed|null
     */
    protected $value;
    /**
     * The configure item can be updated or not
     *
     * @var bool|null
     */
    protected $editable;
    /**
     * The value of current config item
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * The value of current config item
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
     * The configure item can be updated or not
     *
     * @return bool|null
     */
    public function getEditable() : ?bool
    {
        return $this->editable;
    }
    /**
     * The configure item can be updated or not
     *
     * @param bool|null $editable
     *
     * @return self
     */
    public function setEditable(?bool $editable) : self
    {
        $this->editable = $editable;
        return $this;
    }
}