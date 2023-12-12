<?php

namespace Gyroscops\Harbor\Api\Model;

class ActionRequest
{
    /**
     * The action of the request, should be stop, pause or resume
     *
     * @var string|null
     */
    protected $action;
    /**
     * The action of the request, should be stop, pause or resume
     *
     * @return string|null
     */
    public function getAction() : ?string
    {
        return $this->action;
    }
    /**
     * The action of the request, should be stop, pause or resume
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action) : self
    {
        $this->action = $action;
        return $this;
    }
}