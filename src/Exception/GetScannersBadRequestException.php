<?php

namespace Harbor\Api\Exception;

class GetScannersBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad query paramters');
    }
}