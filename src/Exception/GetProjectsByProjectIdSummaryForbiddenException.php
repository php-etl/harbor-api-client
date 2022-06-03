<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdSummaryForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User does not have permission to get summary of the project.');
    }
}