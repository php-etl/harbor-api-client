<?php

namespace Gyroscops\Harbor\Api\Model;

class IsDefault
{
    /**
     * A flag indicating whether a scanner registration is default.
     *
     * @var bool
     */
    protected $isDefault;
    /**
     * A flag indicating whether a scanner registration is default.
     *
     * @return bool
     */
    public function getIsDefault() : bool
    {
        return $this->isDefault;
    }
    /**
     * A flag indicating whether a scanner registration is default.
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault) : self
    {
        $this->isDefault = $isDefault;
        return $this;
    }
}