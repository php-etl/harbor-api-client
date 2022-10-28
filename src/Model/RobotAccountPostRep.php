<?php

namespace Gyroscops\Harbor\Api\Model;

class RobotAccountPostRep
{
    /**
     * the token of robot account
     *
     * @var string|null
     */
    protected $token;
    /**
     * the name of robot account
     *
     * @var string|null
     */
    protected $name;
    /**
     * the token of robot account
     *
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * the token of robot account
     *
     * @param string|null $token
     *
     * @return self
     */
    public function setToken(?string $token): self
    {
        $this->token = $token;
        return $this;
    }
    /**
     * the name of robot account
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * the name of robot account
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
