<?php

namespace Gyroscops\Harbor\Api\Model;

class RobotSec
{
    /**
     * The secret of the robot
     *
     * @var string|null
     */
    protected $secret;
    /**
     * The secret of the robot
     *
     * @return string|null
     */
    public function getSecret() : ?string
    {
        return $this->secret;
    }
    /**
     * The secret of the robot
     *
     * @param string|null $secret
     *
     * @return self
     */
    public function setSecret(?string $secret) : self
    {
        $this->secret = $secret;
        return $this;
    }
}