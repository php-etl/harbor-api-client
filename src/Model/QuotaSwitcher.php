<?php

namespace Gyroscops\Harbor\Api\Model;

class QuotaSwitcher
{
    /**
     * The quota is enable or disable
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * The quota is enable or disable
     *
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
    /**
     * The quota is enable or disable
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }
}
