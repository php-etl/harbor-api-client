<?php

namespace Harbor\Api\Exception;

class PostUsergroupInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}