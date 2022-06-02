<?php

namespace Harbor\Api\Exception;

class PostProjectsByProjectIdMetadataNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Project ID does not exist.');
    }
}