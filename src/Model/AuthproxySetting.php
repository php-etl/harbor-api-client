<?php

namespace Gyroscops\Harbor\Api\Model;

class AuthproxySetting
{
    /**
     * The fully qualified URI of login endpoint of authproxy, such as 'https://192.168.1.2:8443/login'
     *
     * @var string|null
     */
    protected $endpoint;
    /**
     * The fully qualified URI of token review endpoint of authproxy, such as 'https://192.168.1.2:8443/tokenreview'
     *
     * @var string|null
     */
    protected $tokenreivewEndpoint;
    /**
     * The flag to determine whether Harbor can skip search the user/group when adding him as a member.
     *
     * @var bool|null
     */
    protected $skipSearch;
    /**
     * The flag to determine whether Harbor should verify the certificate when connecting to the auth proxy.
     *
     * @var bool|null
     */
    protected $verifyCert;
    /**
     * The certificate to be pinned when connecting auth proxy.
     *
     * @var string|null
     */
    protected $serverCertificate;
    /**
     * The fully qualified URI of login endpoint of authproxy, such as 'https://192.168.1.2:8443/login'
     *
     * @return string|null
     */
    public function getEndpoint() : ?string
    {
        return $this->endpoint;
    }
    /**
     * The fully qualified URI of login endpoint of authproxy, such as 'https://192.168.1.2:8443/login'
     *
     * @param string|null $endpoint
     *
     * @return self
     */
    public function setEndpoint(?string $endpoint) : self
    {
        $this->endpoint = $endpoint;
        return $this;
    }
    /**
     * The fully qualified URI of token review endpoint of authproxy, such as 'https://192.168.1.2:8443/tokenreview'
     *
     * @return string|null
     */
    public function getTokenreivewEndpoint() : ?string
    {
        return $this->tokenreivewEndpoint;
    }
    /**
     * The fully qualified URI of token review endpoint of authproxy, such as 'https://192.168.1.2:8443/tokenreview'
     *
     * @param string|null $tokenreivewEndpoint
     *
     * @return self
     */
    public function setTokenreivewEndpoint(?string $tokenreivewEndpoint) : self
    {
        $this->tokenreivewEndpoint = $tokenreivewEndpoint;
        return $this;
    }
    /**
     * The flag to determine whether Harbor can skip search the user/group when adding him as a member.
     *
     * @return bool|null
     */
    public function getSkipSearch() : ?bool
    {
        return $this->skipSearch;
    }
    /**
     * The flag to determine whether Harbor can skip search the user/group when adding him as a member.
     *
     * @param bool|null $skipSearch
     *
     * @return self
     */
    public function setSkipSearch(?bool $skipSearch) : self
    {
        $this->skipSearch = $skipSearch;
        return $this;
    }
    /**
     * The flag to determine whether Harbor should verify the certificate when connecting to the auth proxy.
     *
     * @return bool|null
     */
    public function getVerifyCert() : ?bool
    {
        return $this->verifyCert;
    }
    /**
     * The flag to determine whether Harbor should verify the certificate when connecting to the auth proxy.
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
    /**
     * The certificate to be pinned when connecting auth proxy.
     *
     * @return string|null
     */
    public function getServerCertificate() : ?string
    {
        return $this->serverCertificate;
    }
    /**
     * The certificate to be pinned when connecting auth proxy.
     *
     * @param string|null $serverCertificate
     *
     * @return self
     */
    public function setServerCertificate(?string $serverCertificate) : self
    {
        $this->serverCertificate = $serverCertificate;
        return $this;
    }
}