<?php

namespace Gyroscops\Harbor\Api\Model;

class ImmutableRule
{
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $priority;
    /**
     * 
     *
     * @var bool|null
     */
    protected $disabled;
    /**
     * 
     *
     * @var string|null
     */
    protected $action;
    /**
     * 
     *
     * @var string|null
     */
    protected $template;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $params;
    /**
     * 
     *
     * @var ImmutableSelector[]|null
     */
    protected $tagSelectors;
    /**
     * 
     *
     * @var ImmutableSelector[][]|null
     */
    protected $scopeSelectors;
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPriority() : ?int
    {
        return $this->priority;
    }
    /**
     * 
     *
     * @param int|null $priority
     *
     * @return self
     */
    public function setPriority(?int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDisabled() : ?bool
    {
        return $this->disabled;
    }
    /**
     * 
     *
     * @param bool|null $disabled
     *
     * @return self
     */
    public function setDisabled(?bool $disabled) : self
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAction() : ?string
    {
        return $this->action;
    }
    /**
     * 
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action) : self
    {
        $this->action = $action;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTemplate() : ?string
    {
        return $this->template;
    }
    /**
     * 
     *
     * @param string|null $template
     *
     * @return self
     */
    public function setTemplate(?string $template) : self
    {
        $this->template = $template;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getParams() : ?iterable
    {
        return $this->params;
    }
    /**
     * 
     *
     * @param mixed[]|null $params
     *
     * @return self
     */
    public function setParams(?iterable $params) : self
    {
        $this->params = $params;
        return $this;
    }
    /**
     * 
     *
     * @return ImmutableSelector[]|null
     */
    public function getTagSelectors() : ?array
    {
        return $this->tagSelectors;
    }
    /**
     * 
     *
     * @param ImmutableSelector[]|null $tagSelectors
     *
     * @return self
     */
    public function setTagSelectors(?array $tagSelectors) : self
    {
        $this->tagSelectors = $tagSelectors;
        return $this;
    }
    /**
     * 
     *
     * @return ImmutableSelector[][]|null
     */
    public function getScopeSelectors() : ?iterable
    {
        return $this->scopeSelectors;
    }
    /**
     * 
     *
     * @param ImmutableSelector[][]|null $scopeSelectors
     *
     * @return self
     */
    public function setScopeSelectors(?iterable $scopeSelectors) : self
    {
        $this->scopeSelectors = $scopeSelectors;
        return $this;
    }
}