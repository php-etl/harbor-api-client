<?php

namespace Harbor\Api\Model;

class StringConfigItem
{
    /**
     * The configure item can be updated or not
     *
     * @var bool
     */
    protected $editable;
    /**
     * The string value of current config item
     *
     * @var string
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
     * The string value of current config item
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The string value of current config item
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