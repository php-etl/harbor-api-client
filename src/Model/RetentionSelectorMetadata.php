<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionSelectorMetadata
{
    /**
     * 
     *
     * @var string|null
     */
    protected $displayText;
    /**
     * 
     *
     * @var string|null
     */
    protected $kind;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $decorations;
    /**
     * 
     *
     * @return string|null
     */
    public function getDisplayText() : ?string
    {
        return $this->displayText;
    }
    /**
     * 
     *
     * @param string|null $displayText
     *
     * @return self
     */
    public function setDisplayText(?string $displayText) : self
    {
        $this->displayText = $displayText;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKind() : ?string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string|null $kind
     *
     * @return self
     */
    public function setKind(?string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getDecorations() : ?array
    {
        return $this->decorations;
    }
    /**
     * 
     *
     * @param string[]|null $decorations
     *
     * @return self
     */
    public function setDecorations(?array $decorations) : self
    {
        $this->decorations = $decorations;
        return $this;
    }
}