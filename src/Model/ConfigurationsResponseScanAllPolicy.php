<?php

namespace Gyroscops\Harbor\Api\Model;

class ConfigurationsResponseScanAllPolicy
{
    /**
     * The type of scan all policy, currently the valid values are "none" and "daily"
     *
     * @var string
     */
    protected $type;
    /**
     * The parameters of the policy, the values are dependant on the type of the policy.
     *
     * @var ConfigurationsResponseScanAllPolicyParameter
     */
    protected $parameter;
    /**
     * The type of scan all policy, currently the valid values are "none" and "daily"
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of scan all policy, currently the valid values are "none" and "daily"
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The parameters of the policy, the values are dependant on the type of the policy.
     *
     * @return ConfigurationsResponseScanAllPolicyParameter
     */
    public function getParameter() : ConfigurationsResponseScanAllPolicyParameter
    {
        return $this->parameter;
    }
    /**
     * The parameters of the policy, the values are dependant on the type of the policy.
     *
     * @param ConfigurationsResponseScanAllPolicyParameter $parameter
     *
     * @return self
     */
    public function setParameter(ConfigurationsResponseScanAllPolicyParameter $parameter) : self
    {
        $this->parameter = $parameter;
        return $this;
    }
}