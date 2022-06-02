<?php

namespace Harbor\Api\Model;

class RetentionMetadata
{
    /**
     * templates
     *
     * @var RetentionRuleMetadata[]
     */
    protected $templates;
    /**
     * supported tag selectors
     *
     * @var RetentionSelectorMetadata[]
     */
    protected $tagSelectors;
    /**
     * supported scope selectors
     *
     * @var RetentionSelectorMetadata[]
     */
    protected $scopeSelectors;
    /**
     * templates
     *
     * @return RetentionRuleMetadata[]
     */
    public function getTemplates() : array
    {
        return $this->templates;
    }
    /**
     * templates
     *
     * @param RetentionRuleMetadata[] $templates
     *
     * @return self
     */
    public function setTemplates(array $templates) : self
    {
        $this->templates = $templates;
        return $this;
    }
    /**
     * supported tag selectors
     *
     * @return RetentionSelectorMetadata[]
     */
    public function getTagSelectors() : array
    {
        return $this->tagSelectors;
    }
    /**
     * supported tag selectors
     *
     * @param RetentionSelectorMetadata[] $tagSelectors
     *
     * @return self
     */
    public function setTagSelectors(array $tagSelectors) : self
    {
        $this->tagSelectors = $tagSelectors;
        return $this;
    }
    /**
     * supported scope selectors
     *
     * @return RetentionSelectorMetadata[]
     */
    public function getScopeSelectors() : array
    {
        return $this->scopeSelectors;
    }
    /**
     * supported scope selectors
     *
     * @param RetentionSelectorMetadata[] $scopeSelectors
     *
     * @return self
     */
    public function setScopeSelectors(array $scopeSelectors) : self
    {
        $this->scopeSelectors = $scopeSelectors;
        return $this;
    }
}