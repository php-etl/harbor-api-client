<?php

namespace Harbor\Api\Exception;

class PostProjectsByProjectIdImmutabletagruleInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server errors.');
    }
}