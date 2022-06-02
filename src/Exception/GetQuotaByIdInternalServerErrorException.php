<?php

namespace Harbor\Api\Exception;

class GetQuotaByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}