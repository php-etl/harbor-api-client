<?php

namespace Harbor\Api\Model;

class RetentionPolicy
{
    /**
     * 
     *
     * @var RetentionRule[]
     */
    protected $rules;
    /**
     * 
     *
     * @var RetentionPolicyScope
     */
    protected $scope;
    /**
     * 
     *
     * @var RetentionRuleTrigger
     */
    protected $trigger;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $algorithm;
    /**
     * 
     *
     * @return RetentionRule[]
     */
    public function getRules() : array
    {
        return $this->rules;
    }
    /**
     * 
     *
     * @param RetentionRule[] $rules
     *
     * @return self
     */
    public function setRules(array $rules) : self
    {
        $this->rules = $rules;
        return $this;
    }
    /**
     * 
     *
     * @return RetentionPolicyScope
     */
    public function getScope() : RetentionPolicyScope
    {
        return $this->scope;
    }
    /**
     * 
     *
     * @param RetentionPolicyScope $scope
     *
     * @return self
     */
    public function setScope(RetentionPolicyScope $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * 
     *
     * @return RetentionRuleTrigger
     */
    public function getTrigger() : RetentionRuleTrigger
    {
        return $this->trigger;
    }
    /**
     * 
     *
     * @param RetentionRuleTrigger $trigger
     *
     * @return self
     */
    public function setTrigger(RetentionRuleTrigger $trigger) : self
    {
        $this->trigger = $trigger;
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
    /**
     * 
     *
     * @return string
     */
    public function getAlgorithm() : string
    {
        return $this->algorithm;
    }
    /**
     * 
     *
     * @param string $algorithm
     *
     * @return self
     */
    public function setAlgorithm(string $algorithm) : self
    {
        $this->algorithm = $algorithm;
        return $this;
    }
}