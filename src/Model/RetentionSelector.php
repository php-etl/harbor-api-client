<?php

namespace Harbor\Api\Model;

class RetentionSelector
{
    /**
     * 
     *
     * @var string
     */
    protected $decoration;
    /**
     * 
     *
     * @var string
     */
    protected $pattern;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var string
     */
    protected $extras;
    /**
     * 
     *
     * @return string
     */
    public function getDecoration() : string
    {
        return $this->decoration;
    }
    /**
     * 
     *
     * @param string $decoration
     *
     * @return self
     */
    public function setDecoration(string $decoration) : self
    {
        $this->decoration = $decoration;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPattern() : string
    {
        return $this->pattern;
    }
    /**
     * 
     *
     * @param string $pattern
     *
     * @return self
     */
    public function setPattern(string $pattern) : self
    {
        $this->pattern = $pattern;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExtras() : string
    {
        return $this->extras;
    }
    /**
     * 
     *
     * @param string $extras
     *
     * @return self
     */
    public function setExtras(string $extras) : self
    {
        $this->extras = $extras;
        return $this;
    }
}