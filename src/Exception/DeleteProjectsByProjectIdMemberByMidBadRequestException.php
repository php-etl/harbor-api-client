<?php

namespace Harbor\Api\Exception;

class DeleteProjectsByProjectIdMemberByMidBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('The project id or project member id is invalid.');
    }
}