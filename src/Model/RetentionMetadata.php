<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionMetadata
{
    /**
     * templates
     *
     * @var RetentionRuleMetadata[]|null
     */
    protected $templates;
    /**
     * supported tag selectors
     *
     * @var RetentionSelectorMetadata[]|null
     */
    protected $tagSelectors;
    /**
     * supported scope selectors
     *
     * @var RetentionSelectorMetadata[]|null
     */
    protected $scopeSelectors;
    /**
     * templates
     *
     * @return RetentionRuleMetadata[]|null
     */
    public function getTemplates(): ?array
    {
        return $this->templates;
    }
    /**
     * templates
     *
     * @param RetentionRuleMetadata[]|null $templates
     *
     * @return self
     */
    public function setTemplates(?array $templates): self
    {
        $this->templates = $templates;
        return $this;
    }
    /**
     * supported tag selectors
     *
     * @return RetentionSelectorMetadata[]|null
     */
    public function getTagSelectors(): ?array
    {
        return $this->tagSelectors;
    }
    /**
     * supported tag selectors
     *
     * @param RetentionSelectorMetadata[]|null $tagSelectors
     *
     * @return self
     */
    public function setTagSelectors(?array $tagSelectors): self
    {
        $this->tagSelectors = $tagSelectors;
        return $this;
    }
    /**
     * supported scope selectors
     *
     * @return RetentionSelectorMetadata[]|null
     */
    public function getScopeSelectors(): ?array
    {
        return $this->scopeSelectors;
    }
    /**
     * supported scope selectors
     *
     * @param RetentionSelectorMetadata[]|null $scopeSelectors
     *
     * @return self
     */
    public function setScopeSelectors(?array $scopeSelectors): self
    {
        $this->scopeSelectors = $scopeSelectors;
        return $this;
    }
}
