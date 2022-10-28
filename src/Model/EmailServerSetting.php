<?php

namespace Gyroscops\Harbor\Api\Model;

class EmailServerSetting
{
    /**
     * Use ssl/tls or not.
     *
     * @var bool|null
     */
    protected $emailSsl;
    /**
     * The password of email server.
     *
     * @var string|null
     */
    protected $emailPassword;
    /**
     * The dentity of email server.
     *
     * @var string|null
     */
    protected $emailIdentity;
    /**
     * The port of email server.
     *
     * @var int|null
     */
    protected $emailPort;
    /**
     * The username of email server.
     *
     * @var string|null
     */
    protected $emailUsername;
    /**
     * The host of email server.
     *
     * @var string|null
     */
    protected $emailHost;
    /**
     * Use ssl/tls or not.
     *
     * @return bool|null
     */
    public function getEmailSsl(): ?bool
    {
        return $this->emailSsl;
    }
    /**
     * Use ssl/tls or not.
     *
     * @param bool|null $emailSsl
     *
     * @return self
     */
    public function setEmailSsl(?bool $emailSsl): self
    {
        $this->emailSsl = $emailSsl;
        return $this;
    }
    /**
     * The password of email server.
     *
     * @return string|null
     */
    public function getEmailPassword(): ?string
    {
        return $this->emailPassword;
    }
    /**
     * The password of email server.
     *
     * @param string|null $emailPassword
     *
     * @return self
     */
    public function setEmailPassword(?string $emailPassword): self
    {
        $this->emailPassword = $emailPassword;
        return $this;
    }
    /**
     * The dentity of email server.
     *
     * @return string|null
     */
    public function getEmailIdentity(): ?string
    {
        return $this->emailIdentity;
    }
    /**
     * The dentity of email server.
     *
     * @param string|null $emailIdentity
     *
     * @return self
     */
    public function setEmailIdentity(?string $emailIdentity): self
    {
        $this->emailIdentity = $emailIdentity;
        return $this;
    }
    /**
     * The port of email server.
     *
     * @return int|null
     */
    public function getEmailPort(): ?int
    {
        return $this->emailPort;
    }
    /**
     * The port of email server.
     *
     * @param int|null $emailPort
     *
     * @return self
     */
    public function setEmailPort(?int $emailPort): self
    {
        $this->emailPort = $emailPort;
        return $this;
    }
    /**
     * The username of email server.
     *
     * @return string|null
     */
    public function getEmailUsername(): ?string
    {
        return $this->emailUsername;
    }
    /**
     * The username of email server.
     *
     * @param string|null $emailUsername
     *
     * @return self
     */
    public function setEmailUsername(?string $emailUsername): self
    {
        $this->emailUsername = $emailUsername;
        return $this;
    }
    /**
     * The host of email server.
     *
     * @return string|null
     */
    public function getEmailHost(): ?string
    {
        return $this->emailHost;
    }
    /**
     * The host of email server.
     *
     * @param string|null $emailHost
     *
     * @return self
     */
    public function setEmailHost(?string $emailHost): self
    {
        $this->emailHost = $emailHost;
        return $this;
    }
}
