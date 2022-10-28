<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteProjectsByProjectIdMetadataByMetaNameBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid requst.');
    }
}
