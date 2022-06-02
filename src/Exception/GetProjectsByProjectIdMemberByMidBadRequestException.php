<?php

namespace Harbor\Api\Exception;

class GetProjectsByProjectIdMemberByMidBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Illegal format of project member or invalid project id, member id.');
    }
}