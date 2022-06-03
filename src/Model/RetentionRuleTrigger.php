<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionRuleTrigger
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var mixed
     */
    protected $references;
    /**
     * 
     *
     * @var mixed
     */
    protected $settings;
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
}