<?php

namespace Harbor\Api\Exception;

class PutUsersByUserIdSysadminNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('User ID does not exist.');
    }
}