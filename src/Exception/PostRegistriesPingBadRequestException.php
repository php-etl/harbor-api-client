<?php

namespace Gyroscops\Harbor\Api\Exception;

class PostRegistriesPingBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('No proper registry information provided.');
    }
}
