<?php

namespace Harbor\Api\Exception;

class PutLabelByIdNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('The resource does not exist.');
    }
}