<?php

namespace Harbor\Api\Exception;

class PostScannersPingBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad registration settings');
    }
}