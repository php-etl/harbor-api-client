<?php

namespace Harbor\Api\Exception;

class DeleteProjectsByProjectIdMetadataByMetaNameInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server errors.');
    }
}