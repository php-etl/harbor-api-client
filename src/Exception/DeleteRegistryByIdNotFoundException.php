<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteRegistryByIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Registry does not exist.');
    }
}
