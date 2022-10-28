<?php

namespace Gyroscops\Harbor\Api\Exception;

class PutReplicationExecutionByIdUnsupportedMediaTypeException extends UnsupportedMediaTypeException
{
    public function __construct()
    {
        parent::__construct('The Media Type of the request is not supported, it has to be "application/json"');
    }
}
