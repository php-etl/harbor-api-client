<?php

namespace Harbor\Api\Model;

class QuotaSwitcher
{
    /**
     * The quota is enable or disable
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The quota is enable or disable
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * The quota is enable or disable
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
}