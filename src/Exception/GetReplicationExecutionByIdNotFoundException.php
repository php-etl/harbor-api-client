<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetReplicationExecutionByIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource requested does not exist.');
    }
}
