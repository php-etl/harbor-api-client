<?php

namespace Gyroscops\Harbor\Api\Model;

class SysAdminFlag
{
    /**
     * true-admin, false-not admin.
     *
     * @var bool
     */
    protected $sysadminFlag;
    /**
     * true-admin, false-not admin.
     *
     * @return bool
     */
    public function getSysadminFlag() : bool
    {
        return $this->sysadminFlag;
    }
    /**
     * true-admin, false-not admin.
     *
     * @param bool $sysadminFlag
     *
     * @return self
     */
    public function setSysadminFlag(bool $sysadminFlag) : self
    {
        $this->sysadminFlag = $sysadminFlag;
        return $this;
    }
}