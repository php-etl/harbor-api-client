<?php

namespace Harbor\Api\Exception;

class PostProjectsByProjectIdMetadataInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server errors.');
    }
}