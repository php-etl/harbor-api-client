<?php

namespace Gyroscops\Harbor\Api\Model;

class RetentionSelector
{
    /**
     *
     *
     * @var string|null
     */
    protected $decoration;
    /**
     *
     *
     * @var string|null
     */
    protected $pattern;
    /**
     *
     *
     * @var string|null
     */
    protected $kind;
    /**
     *
     *
     * @var string|null
     */
    protected $extras;
    /**
     *
     *
     * @return string|null
     */
    public function getDecoration(): ?string
    {
        return $this->decoration;
    }
    /**
     *
     *
     * @param string|null $decoration
     *
     * @return self
     */
    public function setDecoration(?string $decoration): self
    {
        $this->decoration = $decoration;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPattern(): ?string
    {
        return $this->pattern;
    }
    /**
     *
     *
     * @param string|null $pattern
     *
     * @return self
     */
    public function setPattern(?string $pattern): self
    {
        $this->pattern = $pattern;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }
    /**
     *
     *
     * @param string|null $kind
     *
     * @return self
     */
    public function setKind(?string $kind): self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getExtras(): ?string
    {
        return $this->extras;
    }
    /**
     *
     *
     * @param string|null $extras
     *
     * @return self
     */
    public function setExtras(?string $extras): self
    {
        $this->extras = $extras;
        return $this;
    }
}
