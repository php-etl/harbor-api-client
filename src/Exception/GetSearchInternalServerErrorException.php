<?php

namespace Harbor\Api\Exception;

class GetSearchInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}