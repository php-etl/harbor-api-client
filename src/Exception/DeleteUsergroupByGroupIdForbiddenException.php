<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteUsergroupByGroupIdForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Only admin has this authority.');
    }
}