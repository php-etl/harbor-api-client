<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutUsergroupByGroupIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('User group does not exist.');
    }
}
