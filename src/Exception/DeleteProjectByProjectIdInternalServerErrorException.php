<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteProjectByProjectIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal errors.');
    }
}