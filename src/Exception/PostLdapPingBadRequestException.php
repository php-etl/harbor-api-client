<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostLdapPingBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Inviald ldap configuration parameters.');
    }
}
