<?php

namespace Gyroscops\Harbor\Api\Model;

class StartReplicationExecution
{
    /**
     * The ID of policy that the execution belongs to.
     *
     * @var int|null
     */
    protected $policyId;
    /**
     * The ID of policy that the execution belongs to.
     *
     * @return int|null
     */
    public function getPolicyId() : ?int
    {
        return $this->policyId;
    }
    /**
     * The ID of policy that the execution belongs to.
     *
     * @param int|null $policyId
     *
     * @return self
     */
    public function setPolicyId(?int $policyId) : self
    {
        $this->policyId = $policyId;
        return $this;
    }
}