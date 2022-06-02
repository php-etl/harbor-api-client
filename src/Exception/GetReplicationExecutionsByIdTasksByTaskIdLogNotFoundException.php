<?php

namespace Harbor\Api\Exception;

class GetReplicationExecutionsByIdTasksByTaskIdLogNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource requested does not exist.');
    }
}