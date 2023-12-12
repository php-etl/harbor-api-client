<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetCertNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Not found the default root certificate.');
    }
}