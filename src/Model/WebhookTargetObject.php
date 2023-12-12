<?php

namespace Gyroscops\Harbor\Api\Model;

class WebhookTargetObject
{
    /**
     * The webhook target notify type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The webhook target address.
     *
     * @var string|null
     */
    protected $address;
    /**
     * The webhook auth header.
     *
     * @var string|null
     */
    protected $authHeader;
    /**
     * Whether or not to skip cert verify.
     *
     * @var bool|null
     */
    protected $skipCertVerify;
    /**
     * The type of webhook paylod format.
     *
     * @var string|null
     */
    protected $payloadFormat;
    /**
     * The webhook target notify type.
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The webhook target notify type.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The webhook target address.
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * The webhook target address.
     *
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress(?string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * The webhook auth header.
     *
     * @return string|null
     */
    public function getAuthHeader() : ?string
    {
        return $this->authHeader;
    }
    /**
     * The webhook auth header.
     *
     * @param string|null $authHeader
     *
     * @return self
     */
    public function setAuthHeader(?string $authHeader) : self
    {
        $this->authHeader = $authHeader;
        return $this;
    }
    /**
     * Whether or not to skip cert verify.
     *
     * @return bool|null
     */
    public function getSkipCertVerify() : ?bool
    {
        return $this->skipCertVerify;
    }
    /**
     * Whether or not to skip cert verify.
     *
     * @param bool|null $skipCertVerify
     *
     * @return self
     */
    public function setSkipCertVerify(?bool $skipCertVerify) : self
    {
        $this->skipCertVerify = $skipCertVerify;
        return $this;
    }
    /**
     * The type of webhook paylod format.
     *
     * @return string|null
     */
    public function getPayloadFormat() : ?string
    {
        return $this->payloadFormat;
    }
    /**
     * The type of webhook paylod format.
     *
     * @param string|null $payloadFormat
     *
     * @return self
     */
    public function setPayloadFormat(?string $payloadFormat) : self
    {
        $this->payloadFormat = $payloadFormat;
        return $this;
    }
}