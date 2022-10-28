<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutProjectsByProjectIdMetadataByMetaNameBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid request.');
    }
}
