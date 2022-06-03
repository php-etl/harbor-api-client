<?php

namespace Gyroscops\Harbor\Api\Model;

class WebhookTargetObject
{
    /**
     * The webhook target notify type.
     *
     * @var string
     */
    protected $type;
    /**
     * The webhook auth header.
     *
     * @var string
     */
    protected $authHeader;
    /**
     * Whether or not to skip cert verify.
     *
     * @var bool
     */
    protected $skipCertVerify;
    /**
     * The webhook target address.
     *
     * @var string
     */
    protected $address;
    /**
     * The webhook target notify type.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The webhook target notify type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The webhook auth header.
     *
     * @return string
     */
    public function getAuthHeader() : string
    {
        return $this->authHeader;
    }
    /**
     * The webhook auth header.
     *
     * @param string $authHeader
     *
     * @return self
     */
    public function setAuthHeader(string $authHeader) : self
    {
        $this->authHeader = $authHeader;
        return $this;
    }
    /**
     * Whether or not to skip cert verify.
     *
     * @return bool
     */
    public function getSkipCertVerify() : bool
    {
        return $this->skipCertVerify;
    }
    /**
     * Whether or not to skip cert verify.
     *
     * @param bool $skipCertVerify
     *
     * @return self
     */
    public function setSkipCertVerify(bool $skipCertVerify) : self
    {
        $this->skipCertVerify = $skipCertVerify;
        return $this;
    }
    /**
     * The webhook target address.
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * The webhook target address.
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;
        return $this;
    }
}