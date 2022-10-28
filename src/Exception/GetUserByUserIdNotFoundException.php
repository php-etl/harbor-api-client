<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetUserByUserIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('User ID does not exist.');
    }
}
