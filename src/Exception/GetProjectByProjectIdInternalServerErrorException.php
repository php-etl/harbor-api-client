<?php

namespace Harbor\Api\Exception;

class GetProjectByProjectIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal errors.');
    }
}