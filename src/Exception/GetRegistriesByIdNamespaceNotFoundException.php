<?php

namespace Gyroscops\Harbor\Api\Exception;

class GetRegistriesByIdNamespaceNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('No registry found.');
    }
}
