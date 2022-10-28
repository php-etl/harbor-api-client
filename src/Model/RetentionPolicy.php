<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionPolicy
{
    /**
     *
     *
     * @var RetentionRule[]|null
     */
    protected $rules;
    /**
     *
     *
     * @var RetentionPolicyScope|null
     */
    protected $scope;
    /**
     *
     *
     * @var RetentionRuleTrigger|null
     */
    protected $trigger;
    /**
     *
     *
     * @var int|null
     */
    protected $id;
    /**
     *
     *
     * @var string|null
     */
    protected $algorithm;
    /**
     *
     *
     * @return RetentionRule[]|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }
    /**
     *
     *
     * @param RetentionRule[]|null $rules
     *
     * @return self
     */
    public function setRules(?array $rules): self
    {
        $this->rules = $rules;
        return $this;
    }
    /**
     *
     *
     * @return RetentionPolicyScope|null
     */
    public function getScope(): ?RetentionPolicyScope
    {
        return $this->scope;
    }
    /**
     *
     *
     * @param RetentionPolicyScope|null $scope
     *
     * @return self
     */
    public function setScope(?RetentionPolicyScope $scope): self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     *
     *
     * @return RetentionRuleTrigger|null
     */
    public function getTrigger(): ?RetentionRuleTrigger
    {
        return $this->trigger;
    }
    /**
     *
     *
     * @param RetentionRuleTrigger|null $trigger
     *
     * @return self
     */
    public function setTrigger(?RetentionRuleTrigger $trigger): self
    {
        $this->trigger = $trigger;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getId(): ?int
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
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAlgorithm(): ?string
    {
        return $this->algorithm;
    }
    /**
     *
     *
     * @param string|null $algorithm
     *
     * @return self
     */
    public function setAlgorithm(?string $algorithm): self
    {
        $this->algorithm = $algorithm;
        return $this;
    }
}
