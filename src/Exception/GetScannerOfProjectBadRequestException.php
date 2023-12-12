<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetScannerOfProjectBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad project ID');
    }
}