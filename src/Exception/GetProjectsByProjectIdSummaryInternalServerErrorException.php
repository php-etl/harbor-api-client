<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdSummaryInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}