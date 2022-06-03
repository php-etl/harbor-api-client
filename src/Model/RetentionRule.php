<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionRule
{
    /**
     * 
     *
     * @var int
     */
    protected $priority;
    /**
     * 
     *
     * @var RetentionSelector[][]
     */
    protected $scopeSelectors;
    /**
     * 
     *
     * @var bool
     */
    protected $disabled;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $params;
    /**
     * 
     *
     * @var string
     */
    protected $template;
    /**
     * 
     *
     * @var string
     */
    protected $action;
    /**
     * 
     *
     * @var RetentionSelector[]
     */
    protected $tagSelectors;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * 
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * 
     *
     * @return RetentionSelector[][]
     */
    public function getScopeSelectors() : iterable
    {
        return $this->scopeSelectors;
    }
    /**
     * 
     *
     * @param RetentionSelector[][] $scopeSelectors
     *
     * @return self
     */
    public function setScopeSelectors(iterable $scopeSelectors) : self
    {
        $this->scopeSelectors = $scopeSelectors;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * 
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled) : self
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getParams() : iterable
    {
        return $this->params;
    }
    /**
     * 
     *
     * @param mixed[] $params
     *
     * @return self
     */
    public function setParams(iterable $params) : self
    {
        $this->params = $params;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTemplate() : string
    {
        return $this->template;
    }
    /**
     * 
     *
     * @param string $template
     *
     * @return self
     */
    public function setTemplate(string $template) : self
    {
        $this->template = $template;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }
    /**
     * 
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action) : self
    {
        $this->action = $action;
        return $this;
    }
    /**
     * 
     *
     * @return RetentionSelector[]
     */
    public function getTagSelectors() : array
    {
        return $this->tagSelectors;
    }
    /**
     * 
     *
     * @param RetentionSelector[] $tagSelectors
     *
     * @return self
     */
    public function setTagSelectors(array $tagSelectors) : self
    {
        $this->tagSelectors = $tagSelectors;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
}