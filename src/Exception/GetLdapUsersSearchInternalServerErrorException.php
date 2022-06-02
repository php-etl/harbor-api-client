<?php

namespace Harbor\Api\Exception;

class GetLdapUsersSearchInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}