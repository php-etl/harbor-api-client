<?php

namespace Gyroscops\Harbor\Api\Model;

class StringConfigItem
{
    /**
     * The configure item can be updated or not
     *
     * @var bool|null
     */
    protected $editable;
    /**
     * The string value of current config item
     *
     * @var string|null
     */
    protected $value;
    /**
     * The configure item can be updated or not
     *
     * @return bool|null
     */
    public function getEditable(): ?bool
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
    public function setEditable(?bool $editable): self
    {
        $this->editable = $editable;
        return $this;
    }
    /**
     * The string value of current config item
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * The string value of current config item
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
