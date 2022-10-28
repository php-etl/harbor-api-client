<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdWebhookJobsBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Illegal format of provided ID value.');
    }
}
