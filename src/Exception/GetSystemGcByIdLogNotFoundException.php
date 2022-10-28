<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetSystemGcByIdLogNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('The specific gc ID\'s log does not exist.');
    }
}
