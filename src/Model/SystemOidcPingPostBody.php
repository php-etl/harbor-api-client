<?php

namespace Harbor\Api\Model;

class SystemOidcPingPostBody
{
    /**
     * The URL of OIDC endpoint to be tested.
     *
     * @var string
     */
    protected $url;
    /**
     * Whether the certificate should be verified
     *
     * @var bool
     */
    protected $verifyCert;
    /**
     * The URL of OIDC endpoint to be tested.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL of OIDC endpoint to be tested.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * Whether the certificate should be verified
     *
     * @return bool
     */
    public function getVerifyCert() : bool
    {
        return $this->verifyCert;
    }
    /**
     * Whether the certificate should be verified
     *
     * @param bool $verifyCert
     *
     * @return self
     */
    public function setVerifyCert(bool $verifyCert) : self
    {
        $this->verifyCert = $verifyCert;
        return $this;
    }
}