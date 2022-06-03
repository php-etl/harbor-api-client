<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutProjectsByProjectIdMemberByMidBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid role id, it should be 1,2 or 3, or invalid project id, or invalid member id.');
    }
}