<?php

namespace Gyroscops\Harbor\Api\Model;

class SystemOidcPingPostBody
{
    /**
     * The URL of OIDC endpoint to be tested.
     *
     * @var string|null
     */
    protected $url;
    /**
     * Whether the certificate should be verified
     *
     * @var bool|null
     */
    protected $verifyCert;
    /**
     * The URL of OIDC endpoint to be tested.
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * The URL of OIDC endpoint to be tested.
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * Whether the certificate should be verified
     *
     * @return bool|null
     */
    public function getVerifyCert() : ?bool
    {
        return $this->verifyCert;
    }
    /**
     * Whether the certificate should be verified
     *
     * @param bool|null $verifyCert
     *
     * @return self
     */
    public function setVerifyCert(?bool $verifyCert) : self
    {
        $this->verifyCert = $verifyCert;
        return $this;
    }
}