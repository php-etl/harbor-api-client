<?php

namespace Harbor\Api\Exception;

class PutProjectsByProjectIdMemberByMidInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}