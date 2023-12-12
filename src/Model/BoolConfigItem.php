<?php

namespace Gyroscops\Harbor\Api\Model;

class BoolConfigItem
{
    /**
     * The boolean value of current config item
     *
     * @var bool|null
     */
    protected $value;
    /**
     * The configure item can be updated or not
     *
     * @var bool|null
     */
    protected $editable;
    /**
     * The boolean value of current config item
     *
     * @return bool|null
     */
    public function getValue() : ?bool
    {
        return $this->value;
    }
    /**
     * The boolean value of current config item
     *
     * @param bool|null $value
     *
     * @return self
     */
    public function setValue(?bool $value) : self
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