<?php

namespace Gyroscops\Harbor\Api\Model;

class ConfigurationsScanAllPolicy
{
    /**
     * The type of scan all policy, currently the valid values are "none" and "daily"
     *
     * @var string|null
     */
    protected $type;
    /**
     * The parameters of the policy, the values are dependant on the type of the policy.
     *
     * @var ConfigurationsScanAllPolicyParameter|null
     */
    protected $parameter;
    /**
     * The type of scan all policy, currently the valid values are "none" and "daily"
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The type of scan all policy, currently the valid values are "none" and "daily"
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The parameters of the policy, the values are dependant on the type of the policy.
     *
     * @return ConfigurationsScanAllPolicyParameter|null
     */
    public function getParameter(): ?ConfigurationsScanAllPolicyParameter
    {
        return $this->parameter;
    }
    /**
     * The parameters of the policy, the values are dependant on the type of the policy.
     *
     * @param ConfigurationsScanAllPolicyParameter|null $parameter
     *
     * @return self
     */
    public function setParameter(?ConfigurationsScanAllPolicyParameter $parameter): self
    {
        $this->parameter = $parameter;
        return $this;
    }
}
