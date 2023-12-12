<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionPolicyScope
{
    /**
     * 
     *
     * @var string|null
     */
    protected $level;
    /**
     * 
     *
     * @var int|null
     */
    protected $ref;
    /**
     * 
     *
     * @return string|null
     */
    public function getLevel() : ?string
    {
        return $this->level;
    }
    /**
     * 
     *
     * @param string|null $level
     *
     * @return self
     */
    public function setLevel(?string $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRef() : ?int
    {
        return $this->ref;
    }
    /**
     * 
     *
     * @param int|null $ref
     *
     * @return self
     */
    public function setRef(?int $ref) : self
    {
        $this->ref = $ref;
        return $this;
    }
}