<?php

namespace Gyroscops\Harbor\Api\Model;

class IntegerConfigItem
{
    /**
     * The integer value of current config item
     *
     * @var int|null
     */
    protected $value;
    /**
     * The configure item can be updated or not
     *
     * @var bool|null
     */
    protected $editable;
    /**
     * The integer value of current config item
     *
     * @return int|null
     */
    public function getValue() : ?int
    {
        return $this->value;
    }
    /**
     * The integer value of current config item
     *
     * @param int|null $value
     *
     * @return self
     */
    public function setValue(?int $value) : self
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