<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetRetentionsByIdExecutionsByEidTaskByTidForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User have no permission.');
    }
}