<?php

namespace Harbor\Api\Exception;

class PutProjectsByProjectIdMetadataByMetaNameInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server errors.');
    }
}