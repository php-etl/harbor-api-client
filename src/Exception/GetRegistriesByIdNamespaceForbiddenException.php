<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetRegistriesByIdNamespaceForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('User has no privilege for the operation.');
    }
}