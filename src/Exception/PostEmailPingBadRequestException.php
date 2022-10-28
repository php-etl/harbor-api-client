<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostEmailPingBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Inviald email server settings.');
    }
}
