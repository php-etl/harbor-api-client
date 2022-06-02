<?php

namespace Harbor\Api\Exception;

class DeleteProjectByProjectIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Project does not exist.');
    }
}