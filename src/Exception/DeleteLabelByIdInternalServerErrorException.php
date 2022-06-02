<?php

namespace Harbor\Api\Exception;

class DeleteLabelByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Unexpected internal errors.');
    }
}