<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionRuleTrigger
{
    /**
     * 
     *
     * @var string|null
     */
    protected $kind;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $settings;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $references;
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
     * @return mixed
     */
    public function getSettings()
    {
        return $this->settings;
    }
    /**
     * 
     *
     * @param mixed $settings
     *
     * @return self
     */
    public function setSettings($settings) : self
    {
        $this->settings = $settings;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getReferences()
    {
        return $this->references;
    }
    /**
     * 
     *
     * @param mixed $references
     *
     * @return self
     */
    public function setReferences($references) : self
    {
        $this->references = $references;
        return $this;
    }
}