<?php

namespace Harbor\Api\Model;

class RobotAccountUpdate
{
    /**
     * The robot account is disable or enable
     *
     * @var bool
     */
    protected $disabled;
    /**
     * The robot account is disable or enable
     *
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * The robot account is disable or enable
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled) : self
    {
        $this->disabled = $disabled;
        return $this;
    }
}