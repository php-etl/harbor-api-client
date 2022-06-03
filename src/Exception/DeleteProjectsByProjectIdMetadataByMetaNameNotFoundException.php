<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteProjectsByProjectIdMetadataByMetaNameNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Project or metadata does not exist.');
    }
}