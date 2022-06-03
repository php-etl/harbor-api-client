<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionRuleParamMetadata
{
    /**
     * 
     *
     * @var bool
     */
    protected $required;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $unit;
    /**
     * 
     *
     * @return bool
     */
    public function getRequired() : bool
    {
        return $this->required;
    }
    /**
     * 
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required) : self
    {
        $this->required = $required;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUnit() : string
    {
        return $this->unit;
    }
    /**
     * 
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit) : self
    {
        $this->unit = $unit;
        return $this;
    }
}