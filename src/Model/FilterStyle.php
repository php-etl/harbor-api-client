<?php

namespace Gyroscops\Harbor\Api\Model;

class FilterStyle
{
    /**
     * The filter type
     *
     * @var string|null
     */
    protected $type;
    /**
     * The filter style
     *
     * @var string|null
     */
    protected $style;
    /**
     * The filter values
     *
     * @var string[]|null
     */
    protected $values;
    /**
     * The filter type
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The filter type
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The filter style
     *
     * @return string|null
     */
    public function getStyle() : ?string
    {
        return $this->style;
    }
    /**
     * The filter style
     *
     * @param string|null $style
     *
     * @return self
     */
    public function setStyle(?string $style) : self
    {
        $this->style = $style;
        return $this;
    }
    /**
     * The filter values
     *
     * @return string[]|null
     */
    public function getValues() : ?array
    {
        return $this->values;
    }
    /**
     * The filter values
     *
     * @param string[]|null $values
     *
     * @return self
     */
    public function setValues(?array $values) : self
    {
        $this->values = $values;
        return $this;
    }
}