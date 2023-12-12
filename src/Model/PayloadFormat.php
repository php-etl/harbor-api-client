<?php

namespace Gyroscops\Harbor\Api\Model;

class PayloadFormat
{
    /**
     * Webhook supported notify type.
     *
     * @var string|null
     */
    protected $notifyType;
    /**
     * The supported payload formats for this notify type.
     *
     * @var string[]|null
     */
    protected $formats;
    /**
     * Webhook supported notify type.
     *
     * @return string|null
     */
    public function getNotifyType() : ?string
    {
        return $this->notifyType;
    }
    /**
     * Webhook supported notify type.
     *
     * @param string|null $notifyType
     *
     * @return self
     */
    public function setNotifyType(?string $notifyType) : self
    {
        $this->notifyType = $notifyType;
        return $this;
    }
    /**
     * The supported payload formats for this notify type.
     *
     * @return string[]|null
     */
    public function getFormats() : ?array
    {
        return $this->formats;
    }
    /**
     * The supported payload formats for this notify type.
     *
     * @param string[]|null $formats
     *
     * @return self
     */
    public function setFormats(?array $formats) : self
    {
        $this->formats = $formats;
        return $this;
    }
}