<?php

namespace Gyroscops\Harbor\Api\Model;

class SysAdminFlag
{
    /**
     * true-admin, false-not admin.
     *
     * @var bool|null
     */
    protected $sysadminFlag;
    /**
     * true-admin, false-not admin.
     *
     * @return bool|null
     */
    public function getSysadminFlag(): ?bool
    {
        return $this->sysadminFlag;
    }
    /**
     * true-admin, false-not admin.
     *
     * @param bool|null $sysadminFlag
     *
     * @return self
     */
    public function setSysadminFlag(?bool $sysadminFlag): self
    {
        $this->sysadminFlag = $sysadminFlag;
        return $this;
    }
}
