<?php

namespace Harbor\Api\Exception;

class PostLdapPingUnsupportedMediaTypeException extends UnsupportedMediaTypeException
{
    public function __construct()
    {
        parent::__construct('The Media Type of the request is not supported, it has to be "application/json"');
    }
}