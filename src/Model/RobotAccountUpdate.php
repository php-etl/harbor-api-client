<?php

namespace Gyroscops\Harbor\Api\Model;

class RobotAccountUpdate
{
    /**
     * The robot account is disable or enable
     *
     * @var bool|null
     */
    protected $disabled;
    /**
     * The robot account is disable or enable
     *
     * @return bool|null
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }
    /**
     * The robot account is disable or enable
     *
     * @param bool|null $disabled
     *
     * @return self
     */
    public function setDisabled(?bool $disabled): self
    {
        $this->disabled = $disabled;
        return $this;
    }
}
