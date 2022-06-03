<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostScannerBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad registration request');
    }
}