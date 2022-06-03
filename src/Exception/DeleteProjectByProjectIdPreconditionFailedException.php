<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteProjectByProjectIdPreconditionFailedException extends PreconditionFailedException
{
    public function __construct()
    {
        parent::__construct('Project contains policies, can not be deleted.');
    }
}