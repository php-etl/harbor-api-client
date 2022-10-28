<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionsIdExecutionsEidPatchBody
{
    /**
     *
     *
     * @var string|null
     */
    protected $action;
    /**
     *
     *
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     *
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action): self
    {
        $this->action = $action;
        return $this;
    }
}
