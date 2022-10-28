<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetProjectsByProjectIdMetadataUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('User need to login first.');
    }
}
