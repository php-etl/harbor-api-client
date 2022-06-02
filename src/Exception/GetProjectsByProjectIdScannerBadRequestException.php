<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdScannerBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad project ID');
    }
}