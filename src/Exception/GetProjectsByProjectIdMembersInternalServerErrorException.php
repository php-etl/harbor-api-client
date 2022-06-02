<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdMembersInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}