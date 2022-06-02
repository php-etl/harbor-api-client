<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdScannerCandidatesBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad project ID or query parameters');
    }
}