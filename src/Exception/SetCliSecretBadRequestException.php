<?php

namespace Gyroscops\Harbor\Api\Exception;

class SetCliSecretBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid user ID.  Or user is not onboarded via OIDC authentication. Or the secret does not meet the standard.');
    }
}