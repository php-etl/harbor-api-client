<?php

namespace Gyroscops\Harbor\Api\Exception;

class SetCliSecretPreconditionFailedException extends PreconditionFailedException
{
    public function __construct()
    {
        parent::__construct('The auth mode of the system is not "oidc_auth", or the user is not onboarded via OIDC AuthN.');
    }
}