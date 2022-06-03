<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionPolicyScope
{
    /**
     * 
     *
     * @var int
     */
    protected $ref;
    /**
     * 
     *
     * @var string
     */
    protected $level;
    /**
     * 
     *
     * @return int
     */
    public function getRef() : int
    {
        return $this->ref;
    }
    /**
     * 
     *
     * @param int $ref
     *
     * @return self
     */
    public function setRef(int $ref) : self
    {
        $this->ref = $ref;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLevel() : string
    {
        return $this->level;
    }
    /**
     * 
     *
     * @param string $level
     *
     * @return self
     */
    public function setLevel(string $level) : self
    {
        $this->level = $level;
        return $this;
    }
}