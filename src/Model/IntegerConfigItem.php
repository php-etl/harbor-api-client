<?php

namespace Harbor\Api\Model;

class IntegerConfigItem
{
    /**
     * The configure item can be updated or not
     *
     * @var bool
     */
    protected $editable;
    /**
     * The integer value of current config item
     *
     * @var int
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
     * The integer value of current config item
     *
     * @return int
     */
    public function getValue() : int
    {
        return $this->value;
    }
    /**
     * The integer value of current config item
     *
     * @param int $value
     *
     * @return self
     */
    public function setValue(int $value) : self
    {
        $this->value = $value;
        return $this;
    }
}