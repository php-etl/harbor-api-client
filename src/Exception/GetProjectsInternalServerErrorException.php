<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal errors.');
    }
}