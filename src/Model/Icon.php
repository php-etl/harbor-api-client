<?php

namespace Gyroscops\Harbor\Api\Model;

class Icon
{
    /**
     * The content type of the icon
     *
     * @var string|null
     */
    protected $contentType;
    /**
     * The base64 encoded content of the icon
     *
     * @var string|null
     */
    protected $content;
    /**
     * The content type of the icon
     *
     * @return string|null
     */
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    /**
     * The content type of the icon
     *
     * @param string|null $contentType
     *
     * @return self
     */
    public function setContentType(?string $contentType) : self
    {
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * The base64 encoded content of the icon
     *
     * @return string|null
     */
    public function getContent() : ?string
    {
        return $this->content;
    }
    /**
     * The base64 encoded content of the icon
     *
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content) : self
    {
        $this->content = $content;
        return $this;
    }
}