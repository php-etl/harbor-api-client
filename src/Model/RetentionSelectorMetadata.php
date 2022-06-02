<?php

namespace Harbor\Api\Model;

class RetentionSelectorMetadata
{
    /**
     * 
     *
     * @var string
     */
    protected $displayText;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var string[]
     */
    protected $decorations;
    /**
     * 
     *
     * @return string
     */
    public function getDisplayText() : string
    {
        return $this->displayText;
    }
    /**
     * 
     *
     * @param string $displayText
     *
     * @return self
     */
    public function setDisplayText(string $displayText) : self
    {
        $this->displayText = $displayText;
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
     * @return string[]
     */
    public function getDecorations() : array
    {
        return $this->decorations;
    }
    /**
     * 
     *
     * @param string[] $decorations
     *
     * @return self
     */
    public function setDecorations(array $decorations) : self
    {
        $this->decorations = $decorations;
        return $this;
    }
}