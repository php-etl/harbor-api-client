<?php

namespace Harbor\Api\Exception;

class PostEmailPingForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Only admin has this authority.');
    }
}