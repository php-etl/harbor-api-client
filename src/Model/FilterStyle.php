<?php

namespace Harbor\Api\Model;

class FilterStyle
{
    /**
     * The filter type
     *
     * @var string
     */
    protected $type;
    /**
     * The filter style
     *
     * @var string
     */
    protected $style;
    /**
     * The filter values
     *
     * @var string[]
     */
    protected $values;
    /**
     * The filter type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The filter type
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
     * The filter style
     *
     * @return string
     */
    public function getStyle() : string
    {
        return $this->style;
    }
    /**
     * The filter style
     *
     * @param string $style
     *
     * @return self
     */
    public function setStyle(string $style) : self
    {
        $this->style = $style;
        return $this;
    }
    /**
     * The filter values
     *
     * @return string[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
    /**
     * The filter values
     *
     * @param string[] $values
     *
     * @return self
     */
    public function setValues(array $values) : self
    {
        $this->values = $values;
        return $this;
    }
}