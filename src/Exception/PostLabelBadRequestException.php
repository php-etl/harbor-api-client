<?php

namespace Harbor\Api\Exception;

class PostLabelBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid parameters.');
    }
}