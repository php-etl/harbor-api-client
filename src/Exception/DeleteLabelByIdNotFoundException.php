<?php

namespace Gyroscops\Harbor\Api\Exception;

class DeleteLabelByIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('The resource does not exist.');
    }
}