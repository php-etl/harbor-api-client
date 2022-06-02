<?php

namespace Harbor\Api\Exception;

class PutQuotaByIdBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Illegal format of quota update request.');
    }
}