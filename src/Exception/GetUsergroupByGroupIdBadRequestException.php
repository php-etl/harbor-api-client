<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetUsergroupByGroupIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('The user group id is invalid.');
    }
}
