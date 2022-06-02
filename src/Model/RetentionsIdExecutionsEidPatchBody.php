<?php

namespace Harbor\Api\Model;

class RetentionsIdExecutionsEidPatchBody
{
    /**
     * 
     *
     * @var string
     */
    protected $action;
    /**
     * 
     *
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }
    /**
     * 
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action) : self
    {
        $this->action = $action;
        return $this;
    }
}