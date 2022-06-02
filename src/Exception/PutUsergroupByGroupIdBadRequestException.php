<?php

namespace Harbor\Api\Exception;

class PutUsergroupByGroupIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('The user group id is invalid.');
    }
}