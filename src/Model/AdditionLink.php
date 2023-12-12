<?php

namespace Gyroscops\Harbor\Api\Model;

class AdditionLink
{
    /**
     * The link of the addition
     *
     * @var string|null
     */
    protected $href;
    /**
     * Determine whether the link is an absolute URL or not
     *
     * @var bool|null
     */
    protected $absolute;
    /**
     * The link of the addition
     *
     * @return string|null
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * The link of the addition
     *
     * @param string|null $href
     *
     * @return self
     */
    public function setHref(?string $href) : self
    {
        $this->href = $href;
        return $this;
    }
    /**
     * Determine whether the link is an absolute URL or not
     *
     * @return bool|null
     */
    public function getAbsolute() : ?bool
    {
        return $this->absolute;
    }
    /**
     * Determine whether the link is an absolute URL or not
     *
     * @param bool|null $absolute
     *
     * @return self
     */
    public function setAbsolute(?bool $absolute) : self
    {
        $this->absolute = $absolute;
        return $this;
    }
}