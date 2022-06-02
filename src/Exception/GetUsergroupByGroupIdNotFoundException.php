<?php

namespace Harbor\Api\Exception;

class GetUsergroupByGroupIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('User group does not exist.');
    }
}