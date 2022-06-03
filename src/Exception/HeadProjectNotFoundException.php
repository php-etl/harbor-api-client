<?php

namespace Gyroscops\Harbor\Api\Exception;

class HeadProjectNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Project name does not exist.');
    }
}