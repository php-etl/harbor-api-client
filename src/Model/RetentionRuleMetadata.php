<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionRuleMetadata
{
    /**
     * rule display text
     *
     * @var string
     */
    protected $displayText;
    /**
     * rule action
     *
     * @var string
     */
    protected $action;
    /**
     * rule params
     *
     * @var RetentionRuleParamMetadata[]
     */
    protected $params;
    /**
     * rule id
     *
     * @var string
     */
    protected $ruleTemplate;
    /**
     * rule display text
     *
     * @return string
     */
    public function getDisplayText() : string
    {
        return $this->displayText;
    }
    /**
     * rule display text
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
     * rule action
     *
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }
    /**
     * rule action
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
     * rule params
     *
     * @return RetentionRuleParamMetadata[]
     */
    public function getParams() : array
    {
        return $this->params;
    }
    /**
     * rule params
     *
     * @param RetentionRuleParamMetadata[] $params
     *
     * @return self
     */
    public function setParams(array $params) : self
    {
        $this->params = $params;
        return $this;
    }
    /**
     * rule id
     *
     * @return string
     */
    public function getRuleTemplate() : string
    {
        return $this->ruleTemplate;
    }
    /**
     * rule id
     *
     * @param string $ruleTemplate
     *
     * @return self
     */
    public function setRuleTemplate(string $ruleTemplate) : self
    {
        $this->ruleTemplate = $ruleTemplate;
        return $this;
    }
}