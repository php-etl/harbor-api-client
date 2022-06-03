<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetRetentionsByIdExecutionsForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission.');
    }
}