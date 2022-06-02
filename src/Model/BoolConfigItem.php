<?php

namespace Harbor\Api\Model;

class BoolConfigItem
{
    /**
     * The configure item can be updated or not
     *
     * @var bool
     */
    protected $editable;
    /**
     * The boolean value of current config item
     *
     * @var bool
     */
    protected $value;
    /**
     * The configure item can be updated or not
     *
     * @return bool
     */
    public function getEditable() : bool
    {
        return $this->editable;
    }
    /**
     * The configure item can be updated or not
     *
     * @param bool $editable
     *
     * @return self
     */
    public function setEditable(bool $editable) : self
    {
        $this->editable = $editable;
        return $this;
    }
    /**
     * The boolean value of current config item
     *
     * @return bool
     */
    public function getValue() : bool
    {
        return $this->value;
    }
    /**
     * The boolean value of current config item
     *
     * @param bool $value
     *
     * @return self
     */
    public function setValue(bool $value) : self
    {
        $this->value = $value;
        return $this;
    }
}