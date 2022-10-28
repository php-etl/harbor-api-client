<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostProjectsByProjectIdMetadataBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid request.');
    }
}
