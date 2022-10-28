<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionRuleMetadata
{
    /**
     * rule display text
     *
     * @var string|null
     */
    protected $displayText;
    /**
     * rule action
     *
     * @var string|null
     */
    protected $action;
    /**
     * rule params
     *
     * @var RetentionRuleParamMetadata[]|null
     */
    protected $params;
    /**
     * rule id
     *
     * @var string|null
     */
    protected $ruleTemplate;
    /**
     * rule display text
     *
     * @return string|null
     */
    public function getDisplayText(): ?string
    {
        return $this->displayText;
    }
    /**
     * rule display text
     *
     * @param string|null $displayText
     *
     * @return self
     */
    public function setDisplayText(?string $displayText): self
    {
        $this->displayText = $displayText;
        return $this;
    }
    /**
     * rule action
     *
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * rule action
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action): self
    {
        $this->action = $action;
        return $this;
    }
    /**
     * rule params
     *
     * @return RetentionRuleParamMetadata[]|null
     */
    public function getParams(): ?array
    {
        return $this->params;
    }
    /**
     * rule params
     *
     * @param RetentionRuleParamMetadata[]|null $params
     *
     * @return self
     */
    public function setParams(?array $params): self
    {
        $this->params = $params;
        return $this;
    }
    /**
     * rule id
     *
     * @return string|null
     */
    public function getRuleTemplate(): ?string
    {
        return $this->ruleTemplate;
    }
    /**
     * rule id
     *
     * @param string|null $ruleTemplate
     *
     * @return self
     */
    public function setRuleTemplate(?string $ruleTemplate): self
    {
        $this->ruleTemplate = $ruleTemplate;
        return $this;
    }
}
